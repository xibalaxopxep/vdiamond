<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Repositories\CategoryRepository;
use Repositories\AttributeRepository;


class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ProductRepository $productRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo) {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo; 
    }

    public function index() {
        $records = $this->productRepo->all();
        return view('backend/product/index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $options = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_PRODUCT);
        $category_html = \App\Helpers\StringHelper::getSelectOptions($options);
        $attributes = $this->attributeRepo->readAttributeByParentAdmin();
        $ordering = $this->productRepo->count_column();
        return view('backend/product/create', compact('category_html', 'attributes','ordering'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->productRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['is_hot'] = isset($input['is_hot']) ? 1 : 0;
        $input['is_new'] = isset($input['is_new']) ? 1 : 0;
        $input['is_combo'] = isset($input['is_combo']) ? 1 : 0;
        $input['is_best_seller'] = isset($input['is_best_seller']) ? 1 : 0;
        $input['is_tragop'] = isset($input['is_tragop']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $input['view_count'] = 0;
        $input['post_schedule'] = isset($input['post_schedule']) ? $input['post_schedule_submit'] : date('Y-m-d H:i:s');
        $product = $this->productRepo->create($input);
        //Th??m v??o l???ch s??? ????ng b??i
        
        //Th??m danh m???c s???n ph???m
        $product->categories()->attach($input['category_id']);
        //Th??m thu???c t??nh s???n ph???m
        $attributes = $this->getProductAttributes($input);
        $product->attributes()->attach($attributes);
        if ($product) {
            return redirect()->route('admin.product.index')->with('success', 'T???o m???i th??nh c??ng');
        } else {
            return redirect()->route('admin.product.index')->with('error', 'T???o m???i th???t b???i');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $record = $this->productRepo->find($id);
        $options = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_PRODUCT);
        $category_ids = $record->categories()->get()->pluck('id')->toArray();
        $category_html = \App\Helpers\StringHelper::getSelectOptions($options, $category_ids);
        $attributes = $this->attributeRepo->readAttributeByParentAdmin();
        //L???y danh s??ch id thu???c t??nh c???a s???n ph???m
        $product_attribute_ids = $record->attributes()->get()->pluck('id')->toArray();
        //L???y danh s??ch thu???c t??nh c??a s???n ph???m
        $product_attribute = array();
        foreach ($record->attributes()->get() as $key => $val) {
            if ($val != null) {
                $product_attribute[$val->id] = $val->pivot->value;
            }
        }
        return view('backend/product/edit', compact('record', 'category_html', 'attributes', 'product_attribute', 'product_attribute_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {   
        $input = $request->all();
        $validator = \Validator::make($input, $this->productRepo->validateUpdate($id));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
//      status
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['is_hot'] = isset($input['is_hot']) ? 1 : 0;
        $input['is_new'] = isset($input['is_new']) ? 1 : 0;
        $input['is_combo'] = isset($input['is_combo']) ? 1 : 0;
        $input['is_best_seller'] = isset($input['is_best_seller']) ? 1 : 0;
        $input['is_tragop'] = isset($input['is_tragop']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $input['post_schedule'] = isset($input['post_schedule']) ? $input['post_schedule_submit'] : date('Y-m-d H:i:s');
        $res = $this->productRepo->update($input, $id);
        $product = $this->productRepo->find($id);
        //Th??m danh m???c s???n ph???m
        $product->categories()->sync($input['category_id']);
        //Th??m thu???c t??nh s???n ph???m
        $attributes = $this->getProductAttributes($input);
        $product->attributes()->sync($attributes);
        if ($res) {
            return redirect()->route('admin.product.index')->with('success', 'C???p nh???t th??nh c??ng');
        } else {
            return redirect()->route('admin.product.index')->with('error', 'C???p nh???t th???t b???i');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $product = $this->productRepo->find($id);
        $product->categories()->detach();
        $product->attributes()->detach();
        $this->productRepo->delete($id);
        return redirect()->back()->with('success', 'X??a th??nh c??ng');
    }

    public function getProductAttributes($input) {
        $attributes = array();
        if(isset($input['attribute'])){
            foreach ($input['attribute'] as $key => $val) {
                $attributes[$key] = ['value' => $val];
            }
        }
        if(isset($input['attribute_select'])){
            foreach ($input['attribute_select'] as $key => $val) {
                if ($val != null) {
                    $attributes[$val] = ['value' => null];
                }
            }
        }
        return $attributes;
    }

    

}
