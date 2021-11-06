<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller {

    // public function __construct(CategoryRepository $categoryRepo) {
    //     $this->categoryRepo = $categoryRepo;
    // }

    public function index() {
        return view('frontend/order/checkout'); 
    }

    public function order(){
         return view('frontend/order/order-status');
    }

}
