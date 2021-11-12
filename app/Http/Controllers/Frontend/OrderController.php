<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;
use App\Product;
use DB;
use Session;
use Carbon\Carbon;
class OrderController extends Controller {

    public function __construct(ProductRepository $productRepo, OrderRepository $orderRepo) {
        $this->productRepo = $productRepo;
        $this->orderRepo = $orderRepo;
    }

    public function index(Request $request) {
        $province = DB::table('province')->get();
        $count = 0;
        $total = 0;
        if(session('cart')){
        foreach (session('cart') as $val) {
            $count += $val['quantity'];
            $total += ($val['price'] * $val['quantity']);
        }
        return view('frontend/order/checkout',compact('total','province'));
        }
        else{
            return view('frontend/order/checkout');
        }
    }

    public function order(Request $request){
        $total = 0;
        $count = 0;
        $data = $request->all();
        if(Session::get('cart')){
        $carts = Session::get('cart');
        if(isset($data['privince'])){
            $data['thanh_pho'] = DB::table('province')->where('provinceid', $data['privince'])->pluck('name')->first();
        }
        if(isset($data['district'])){
            $data['quan_huyen'] = DB::table('district')->where('districtid', $data['district'])->pluck('name')->first();
        }
        $data['phuong_xa'] = $data['ward'];
        foreach($carts as $cart){
            $count += $cart['quantity'];
            $total += ($cart['price'] * $cart['quantity']);
        }
        if(Session::get('coupon')){
            $data['coupon'] = Session::get('coupon');
            $total1 = $this->applyCoupon($total, $data['coupon']);
            if($total1 > 0){
                $data['discount'] = $total1;
            }else{
                $data['discount'] = 0;
            }
        }
        $data['total'] = $total;
        $order = $this->orderRepo->create($data);
        foreach($carts as $key => $cart){
            $count += $cart['quantity'];
            $total += ($cart['price'] * $cart['quantity']);
            DB::table('order_detail')->insert(['order_id'=>$order->id, 'product_id'=> $key, 'quantity'=>$count, 'price'=>$cart['price'], 'sub_total'=>$total, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')]);
        }
        Session::forget('coupon');
        Session::forget('cart');
        Session::forget('quantityCart');
        
        return redirect()->route('order.detail', $order->id);
        }else{
            return redirect()->back()->with('error', "Phiên mua hàng của bạn đã hết hạn");
        }
    }

    public function detail(Request $request, $id){
        $record = $this->orderRepo->find($id);
        if(!$record){
            abort(404);
        }
        $order_detail = DB::table('order_detail')->where('order_id',$id)->join('product', 'product.id','=','order_detail.product_id')->get();
        foreach($order_detail as $key => $detail){
            if($detail->sale_price != 0 || $detail->sale_price != null){
                $order_detail[$key]->price = $detail->sale_price;
            }
        }
        return view('frontend/order/order-status', compact('record', 'order_detail'));
    }

     public function applyCoupon($total, $coupon_code) {
        $total_coupon = 0;
        $coupon = \DB::table('coupon')->where('coupon_code', $coupon_code)->first();
        if($coupon){
            if($coupon->coupon_end >= Carbon::now('Asia/Ho_Chi_Minh') && $coupon->coupon_status == 1){
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
                return $total_discount;
                }else{
                    return 0;
                }
        }else{
            return 0;
        }
        }else{
            return 0;
        }
    }

    public function addToCart($id){
        $quantity = 1;
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
                    "model" => $product->model,
                    "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                    "image" => $product->getImage(),
                    "url" => $product->alias
                ]
            ];
            session()->put('cart', $cart);
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
            session()->put('cart', $cart);
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => $quantity,
                "model" => $product->model,
                "price" => $product->sale_price == 0 ? $product->price : $product->sale_price,
                "image" => $product->getImage(),
                "url" => $product->alias
            ];
            session()->put('cart', $cart);
        }
        return redirect()->route('checkout.index');
    }
    

}
