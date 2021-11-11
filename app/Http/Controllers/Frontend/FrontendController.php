<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use App\Repositories\SlideRepository;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use App\Product;

class FrontendController extends Controller {

    public function __construct(CategoryRepository $categoryRepo, SlideRepository $slideRepo, ProductRepository $productRepo, NewsRepository $newsRepo){
        $this->categoryRepo = $categoryRepo;
        $this->slideRepo = $slideRepo;
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
    }

    public function index() {
       $category_arr = $this->categoryRepo->readHomeProductCategory();
       $slides = $this->slideRepo->all();
       $hot_products = Product::where('is_hot', 1)->orderBy('created_at', 'desc')->get();
       $new_products = Product::where('is_new', 1)->orderBy('created_at', 'desc')->get();
       $combo_products = Product::where('is_combo', 1)->orderBy('created_at', 'desc')->get();
       $best_sell_products = Product::where('is_best_seller', 1)->orderBy('created_at', 'desc')->take(30)->get();
       $advance_products = $this->productRepo->readProductByCat(3);
       $luxury_products = $this->productRepo->readProductByCat(4);
       $news = $this->newsRepo->all();
       if (config('global.device') != 'pc') {
            return view('mobile/home/index', compact('hot_products' , 'new_products','combo_products', 'slides' , 'advance_products', 'luxury_products', 'best_sell_products', 'news'));
       } else {
            return view('frontend/home/index', compact('hot_products' , 'new_products','combo_products', 'slides' , 'advance_products', 'luxury_products', 'best_sell_products', 'news'));
       }
    }

    public function about(){
        return view('frontend/about/index');
    }

    public function contact(){
        return view('frontend/about/contact');
    }

    public function galerry(){
        return view('frontend/gallery/index');
    }

}
