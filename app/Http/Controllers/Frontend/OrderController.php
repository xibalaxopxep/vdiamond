<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Product;
use DB;
use Session;
class OrderController extends Controller {

    public function __construct(ProductRepository $productRepo) {
        $this->productRepo = $productRepo;
    }

    public function index(Request $request) {
        $count = 0;
        $total = 0;
        if(session('cart')){
        foreach (session('cart') as $val) {
            $count += $val['quantity'];
            $total += ($val['price'] * $val['quantity']);
        }
        return view('frontend/order/checkout',compact('total'));
        }
        else{
            return view('frontend/order/checkout');
        }
    }

    public function order(){
         return view('frontend/order/order-status');
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
