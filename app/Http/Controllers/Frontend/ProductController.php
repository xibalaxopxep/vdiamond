<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\ProductAttributeRepository;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Repositories\AttributeRepository;
use Repositories\CategoryRepository;
use App\Repositories\OrderRepository;
use App\Repositories\OrderDetailRepository;
use App\Product;
use DB;


class ProductController extends Controller {

    public function __construct(OrderRepository $orderRepo, OrderDetailRepository $orderdetailRepo, ProductRepository $productRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo, ProductAttributeRepository $productAttrRepo, ProductCategoryRepository $productCategoryRepo) {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
        $this->productAttrRepo = $productAttrRepo;
        $this->productCategoryRepo = $productCategoryRepo;
        $this->orderRepo = $orderRepo;
        $this->orderdetailRepo = $orderdetailRepo;
    }

    public function index(Request $request) {
        ini_set('memory_limit', '2048M');
        return view('frontend/product/list');
    }

    public function detail(Request $request) {
        ini_set('memory_limit', '2048M');
        $record = $this->productRepo->findByAlias($request->alias);
        $attr_ids = \DB::table('product_attribute')->where('product_id', $record->id)->get()->pluck('attribute_id');
        $attributes = \DB::table('attribute')->where('module','product')->whereIn('id', $attr_ids)->get()->groupBy('parent_id');
        foreach ($attributes as $key => $val) {
            $attributes[$key]->parent_name = \DB::table('attribute')->where('id', $key)->pluck('title')->first();
        }
        $colors = \DB::table('attribute')->where('module','color')->whereIn('id', $attr_ids)->get();
        $cat_id = \DB::table('product_category')->where('product_id', $record->id)->get()->pluck('category_id');
        $category = \DB::table('category')->where('id', $cat_id)->first();
        $related_products = $this->productRepo->readRelatedProduct(15,$category, $record->id);
        return view('frontend/product/detail', compact('record','attributes','colors','category','related_products'));
    }

    public function search(Request $request){
        $search_key = $request->keyword;
        $products = $this->productRepo->searchProductByKey($request);
        $attribute_id = DB::table('product_attribute')->whereIn('product_id',$products->pluck('id'))->get();
        $attributes = DB::table('attribute')->whereIn('id', $attribute_id->pluck('attribute_id'))->where('module','!=','color')->get()->groupBy('parent_id');
        foreach($attributes as $key => $attr){
            $attributes[$key]->name = DB::table('attribute')->where('id', $key)->pluck('title')->first();
        }
        $category_id = DB::table('product_category')->whereIn('product_id',$products->pluck('id'))->get();
        $categories = DB::table('category')->whereIn('id', $category_id->pluck('category_id'))->get()->groupBy('parent_id');
        foreach($categories as $key => $cat){
            $categories[$key]->name = DB::table('category')->where('id', $key)->pluck('title')->first();
        }
        return view('frontend/product/search', compact('products','categories','attributes','search_key'));
    }

    public function category(Request $request){
        $alias = $request->alias;
        $category = DB::table('category')->where('alias', $alias)->first();
        $parent = DB::table('category')->where('parent_id', $category->id)->get();
        if(count($parent) == 0){
            $product_id = DB::table('product_category')->where('category_id', $category->id)->get()->pluck('product_id');
            $products = Product::whereIn('id', $product_id)->get();
        }
        else{
            $parent = $parent->pluck('id');
            $product_id = DB::table('product_category')->whereIn('category_id', $parent)->get()->pluck('product_id');
            $products = Product::whereIn('id', $product_id)->get();
        }
        $attribute_id = DB::table('product_attribute')->whereIn('product_id',$products->pluck('id'))->get();
        $attributes = DB::table('attribute')->whereIn('id', $attribute_id->pluck('attribute_id'))->where('module','!=','color')->get()->groupBy('parent_id');
        foreach($attributes as $key => $attr){
            $attributes[$key]->name = DB::table('attribute')->where('id', $key)->pluck('title')->first();
        }
        $category_id = DB::table('product_category')->whereIn('product_id',$products->pluck('id'))->get();
        $categories = DB::table('category')->whereIn('id', $category_id->pluck('category_id'))->get()->groupBy('parent_id');
        foreach($categories as $key => $cat){
            $categories[$key]->name = DB::table('category')->where('id', $key)->pluck('title')->first();
        }
        return view('frontend/product/category', compact('products','categories','attributes','alias','category'));

    }
    

    public function sale(Request $request) {
        ini_set('memory_limit', '2048M');
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $search = $request->all();
        $records = $this->productRepo->readSale($request);
        if ($request->get('keyword')) {
            $this->keywordRepo->create(['keyword' => $request->get('keyword')]);
        }
        if (isset($search['attribute_id'])) {
            $search['attribute_arr'] = explode(',', $search['attribute_id']);
        }
        $new_products = $this->productRepo->readNewProduct();
        if (config('global.device') !== 'pc') {
            $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
            $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);

            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            return view('mobile/product/list', compact('records', 'category_arr', 'attribute_arr', 'new_products', 'search', 'current_category'));
        } else {
            $parent_cat = \App\Category::where('id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID)
                    ->with('parentCategories')
                    ->first();
            $parent_arr[] = ['title' => $parent_cat->title, 'url' => route('product.index', ['category_id' => $parent_cat->id])];
            if ($parent_cat->parentCategories) {
                $parent_arr[] = ['title' => $parent_cat->parentCategories->title, 'url' => route('product.index', ['category_id' => $parent_cat->parentCategories->id])];
                if ($parent_cat->parentCategories->parents) {
                    $parent_arr = array_merge($parent_arr, $this->getParent($parent_cat->parentCategories->parents));
                }
            }
            $parent_arr = array_reverse($parent_arr);
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if (!isset($search['paginate'])) {
                $search['paginate'] = 80;
            }
            $sale = true;
            return view('frontend/product/list', compact('sale', 'records', 'category_arr', 'search', 'current_category', 'parent_arr'));
        }
    }

    public function getParent($parent) {
        $parent_arr[] = ['title' => $parent->title, 'url' => route('product.index', ['category_id' => $parent->id])];
        if ($parent->parents) {
            $parent_arr = array_merge($parent_arr, $this->getParent($parent->parents));
        }
        return $parent_arr;
    }

    

    public function cart() {
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/index', compact('total'));
        } else {
            return view('frontend/cart/index', compact('total'));
        }
    }

    public function checkout() {
        $total = 0;
        foreach (session('cart') as $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/checkout', compact('total'));
        } else {
            return view('frontend/cart/checkout', compact('total'));
        }
    }

    public function checkoutSuccess(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->orderRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $total = 0;
        foreach (session('cart') as $key => $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (!is_null(session('ref'))) {
            $input['ref'] = session('ref');
        }
        $input['total'] = $total;
        $order = $this->orderRepo->create($input);
        foreach (session('cart') as $key => $val) {
            $detail['order_id'] = $order->id;
            $detail['product_id'] = $key;
            $detail['quantity'] = $val['quantity'];
            $detail['price'] = $val['price'];
            $detail['sub_total'] = $val['price'] * $val['quantity'];
            $this->orderdetailRepo->create($detail);
        }
        $request->session()->flush('cart');
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/success');
        } else {
            return view('frontend/cart/success');
        }
    }

}
