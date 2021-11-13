<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\ProductRepository;
use Repositories\AttributeRepository;
use Carbon\Carbon;
use DB;
use App\Product;

class ProductController extends Controller {

    public function __construct(ProductRepository $productRepo, AttributeRepository $attributeRepo) {
        $this->productRepo = $productRepo;
        $this->attributeRepo = $attributeRepo;
    }

    public function search(Request $request){

        $data = $request->all();
        if(!isset($data['cat']) && !isset($data['attr'])){

            if(isset($data['keyword'])){
                $products =  Product::where('title','like','%'.$request->get('keyword').'%');
            }else{
                $alias = $data['alias'];
                $category = DB::table('category')->where('alias', $alias)->first();
                $parent = DB::table('category')->where('parent_id', $category->id)->get();
                if(count($parent) == 0){
                    $product_id = DB::table('product_category')->where('category_id', $category->id)->get()->pluck('product_id');
                    $products = Product::whereIn('id', $product_id);
                }
                else{
                    $parent = $parent->pluck('id');
                    $product_id = DB::table('product_category')->whereIn('category_id', $parent)->get()->pluck('product_id');
                    $products = Product::whereIn('id', $product_id);
                }
            }
            if($data['filter'] == "tra_gop"){
                $products = $products->where('is_tragop', 1);
            }elseif($data['filter'] == "ban_chay"){
                $products = $products->where('is_best_seller', 1);
            }elseif($data['filter'] == "khuyen_mai"){
                $products = $products->where('sale_price','!=', "0");
            }

            if($data['sortByPrice'] == 1){
                $products = $products->orderBy('price', 'asc');
            }elseif($data['sortByPrice'] == 2){
                $products = $products->orderBy('price', 'desc');
            }else{

            }
            $products = $products->get();
            return response()->json($products);
        }
        if(isset($data['cat']) && isset($data['attr'])){
        $product_category = DB::table('product_category')->whereIn('category_id', $data['cat'])->get()->pluck('product_id');
        $product_attribute = DB::table('product_attribute')->whereIn('attribute_id', $data['attr'])->get()->pluck('product_id');
        $product_id = [];
        foreach($product_category as $key => $pro_category){
            foreach($product_attribute as $key => $pro_attribute){
                 if($pro_category == $pro_attribute){
                      $product_id[]+=$pro_category;
                 }
            }
        }
        $product_id = array_unique($product_id);

        }

        elseif(isset($data['cat'])){
            $product_id = DB::table('product_category')->whereIn('category_id', $data['cat'])->get()->pluck('product_id');
        }
        elseif(isset($data['attr'])){
            $product_id = DB::table('product_attribute')->whereIn('attribute_id', $data['attr'])->get()->pluck('product_id');
        }
        if(isset($data['keyword'])){
            $products = Product::whereIn('id', $product_id)->where('title','like','%'.$request->get('keyword').'%');
        }
        else{
            $products = Product::whereIn('id', $product_id);
            // $alias = $data['alias'];
            // $category = DB::table('category')->where('alias', $alias)->first();
            // $parent = DB::table('category')->where('parent_id', $category->id)->get();
            // if(count($parent) == 0){
            //     $product_id = DB::table('product_category')->where('category_id', $category->id)->get()->pluck('product_id');
            //     $products = Product::whereIn('id', $product_id);
            // }
            // else{
            //     $parent = $parent->pluck('id');
            //     $product_id = DB::table('product_category')->whereIn('category_id', $parent)->get()->pluck('product_id');
            //     $products = Product::whereIn('id', $product_id);
            // }
        }
        
        if($data['filter'] == "tra_gop"){
                $products = $products->where('is_tragop', 1);
            }elseif($data['filter'] == "ban_chay"){
                $products = $products->where('is_best_seller', 1);
            }elseif($data['filter'] == "khuyen_mai"){
                $products = $products->where('sale_price','!=', "0");
            }

        if($data['sortByPrice'] == 1){
            $products = $products->orderBy('price', 'asc');
        }elseif($data['sortByPrice'] == 2){
            $products = $products->orderBy('price', 'desc');
        }else{
        }
        $products = $products->get();
       
        return response()->json($products);
    }

    public function addToCart(Request $request){
        $id = $request->get('product_id');
        $quantity = $request->get('quantity');
        $product = $this->productRepo->find($id);
        if (!$product) {
            abort(404);
        }
        $count = 0;
        $total = 0;
        $cart = session()->get('cart');
        if (is_null($cart)) {
            $cart = [
                $id => [
                    "title" => $product->title,
                    "quantity" => $quantity,
                    "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                    "image" => $product->getImage(),
                    "url" => $product->alias
                ]
            ];
            session()->put('cart', $cart);

            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            session()->put('quantityCart', $count);
            return response()->json([
                'success' => true, 'count' => $count, 'total' => number_format($total)
            ]);
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;

            session()->put('cart', $cart);
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            session()->put('quantityCart', $count);
            return response()->json([
                        'success' => true, 'count' => $count, 'total' => number_format($total)
            ]);
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => $quantity,
                "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                "image" => $product->getImage(),
                "url" => $product->alias
            ];
            session()->put('cart', $cart);
        }
        foreach (session('cart') as $val) {
            $count += $val['quantity'];
            $total += ($val['price'] * $val['quantity']);
        }
        session()->put('quantityCart', $count);
        return response()->json([
                    'success' => true, 'count' => $count, 'total' => number_format($total)
        ]);
    }

    public function updateCart(Request $request) {
        $total = 0;
        $count = 0;
        if ($request->product_id && $request->quantity) {
            $cart = session()->get('cart');
            $new_price = $request->quantity * $cart[$request->product_id]["price"];
            $cart[$request->product_id]["quantity"] = $request->quantity;
            if($cart[$request->product_id]["quantity"] <= 0){
                $cart[$request->product_id]["quantity"] = 1;  
            }
            session()->put('cart', $cart);

            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            session()->put('quantityCart', $count);
            return response()->json([
                        'success' => true, 'count' => $count, 'total' => number_format($total),'new_price'=>number_format($new_price)
            ]);
        }
    }

    public function upQuantityCart(Request $request) {
        $total = 0;
        $count = 0;
        if ($request->product_id) {
            $cart =  session()->get('cart');
            $new_price = $request->quantity * $cart[$request->product_id]["price"];
            $cart[$request->product_id]["quantity"] +=1;
            session()->put('cart', $cart);
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            session()->put('quantityCart', $count);
            return response()->json([
                        'success' => true, 'count' => $count, 'total' => number_format($total),'new_price'=>number_format($new_price)
            ]);
        }
    }

    public function downQuantityCart(Request $request) {
       $total = 0;
        $count = 0;

        $cart = session()->get('cart');
        $cart[$request->product_id]["quantity"] -= 1;

        session()->put('cart', $cart);
        foreach (session('cart') as $val) {
            $count += $val['quantity'];
            $total += ($val['price'] * $val['quantity']);
        }
        return response()->json([
                    'success' => true, 'count' => $count, 'total' => number_format($total)
        ]);
    }

    public function applyCoupon(Request $request) {
        $total_coupon = 0;
        $coupon = \DB::table('coupon')->where('coupon_code', $request->coupon_code)->first();
        if($coupon){
            if($coupon->coupon_end >= Carbon::now('Asia/Ho_Chi_Minh') && $coupon->coupon_status == 1){
                Session::put('coupon', $request->coupon_code);
                $total = 0;
                $cart = session()->get('cart');
                session()->put('cart', $cart);
                foreach (session('cart') as $val) {
                    $total += ($val['price'] * $val['quantity']);
                }
                if($total > $coupon->coupon_condition){
                if($coupon->coupon_type == 1){
                    $total_coupon = $total - ($total / 100 * $coupon->coupon_value);
                }
                else{
                    $total_coupon = $total - $coupon->coupon_value;
                    if($total_coupon < 0){
                        $total_coupon = 0;
                    }
                }
                $total_discount = $total - $total_coupon;
                return response()->json([
                        'success' => true, 'total_coupon' => number_format($total_coupon), 'total_discount' => number_format($total_discount)
                ]);
                }else{
                    return response()->json(['success'=> false]);
                }
        }else{
            return response()->json(['success'=> false]);
        }
        }else{
            return response()->json(['success'=> false]);
        }
    }



    public function totalCoupon(){
        $coupon = \DB::table('coupon')->where('coupon_code', Session::get('coupon'))->first();
     

    }

    public function selectAddress(Request $request){
        $type = $request->select;
        $id = $request->id;
        $html = "";
        $html .= "<option selected='' disable=''>---Chọn---</option>";
        if($type == 'province'){
            $records = DB::table('district')->where('provinceid',$id)->get();

            foreach($records as $record){
               $html .= "<option value='".$record->districtid."'>". $record->name ."</option>";
            }
        }
        else{
            $records = DB::table('ward')->where('districtid',$id)->get();
            foreach($records as $record){
               $html .= "<option>".$record->name."</option>";
            }
        }
        return $html;
    }

    public function deleteCart(Request $request) {
        $total = 0;
        $count = 0;

        $cart = session()->get('cart');
        $cart[$request->product_id]["quantity"] -= 1;
        if($cart[$request->product_id]["quantity"] <= 0){
            $cart[$request->product_id]["quantity"] = 1;  
        }
        session()->put('cart', $cart);
        foreach (session('cart') as $val) {
            $count += $val['quantity'];
            $total += ($val['price'] * $val['quantity']);
        }
        return response()->json([
                    'success' => true, 'count' => $count, 'total' => number_format($total),'new_price'=>number_format($new_price)
        ]);
    }

    public function getProductAttribute(Request $request) {
        session_start();
        ini_set('memory_limit', '2048M');
        $search = explode(',', $request->get('ids'));
        $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id')?:\App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
        $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
        $html = '';
        foreach ($attribute_arr as $attribute) {
            if($attribute->id != 17 && $attribute->id != 86){
                $html .= '
                    <div class="filter_type">
                        <h6><b>' . $attribute->title . '</b></h6>
                        <ul class="list-attribute">';
                foreach ($attribute->children as $children) {
                    if ($children->products->count() > 0) {
                        $html .= '
                            <li>
                                <label class="container_check">' . $children->title . '<small>' . $children->products()->whereIn('id', $product_ids)->count() . '</small>
                                    <input type="checkbox" class="attribute_select" value="' . $children->id . '" ' . ((isset($search) && in_array($children->id, $search)) ? 'checked' : '') . '>
                                           <span class="checkmark"></span>
                                </label>
                            </li>';
                    }
                }
                $html .= '</ul>
                </div>';
            }
        }
       return response()->json(array('html' => $html));
    }

    public function getSaleProductAttribute(Request $request) {
        session_start();
        ini_set('memory_limit', '2048M');
        $search = explode(',', $request->get('ids'));
        $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id')?:\App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
        $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
        $html = '';
        foreach ($attribute_arr as $attribute) {
            $html .= '
                <div class="filter_type">
                    <h6><b>' . $attribute->title . '</b></h6>
                    <ul class="list-attribute">';
            foreach ($attribute->children as $children) {
                if ($children->products->count() > 0) {
                    $html .= '
                        <li>
                            <label class="container_check">' . $children->title . '<small>' . $children->products()->whereIn('id', $product_ids)->where('sale_price','>',0)->count() . '</small>
                                <input type="checkbox" class="attribute_select" value="' . $children->id . '" ' . ((isset($search) && in_array($children->id, $search)) ? 'checked' : '') . '>
                                       <span class="checkmark"></span>
                            </label>
                        </li>';
                }
            }
            $html .= '</ul>
            </div>';
        }
       return response()->json(array('html' => $html));
    }

}
