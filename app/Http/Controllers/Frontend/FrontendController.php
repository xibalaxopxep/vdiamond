<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use App\Repositories\SlideRepository;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use App\Product;
use DB;
use Carbon\Carbon;

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
       $popular_total = count($hot_products) + count($new_products) + count($combo_products);
       $best_sell_products = Product::where('is_best_seller', 1)->orderBy('created_at', 'desc')->take(30)->get();
       $advance_products = $this->productRepo->readProductByCat(3);
       $luxury_products = $this->productRepo->readProductByCat(4);
       $trends = DB::table('category')->where('parent_id', 0)->where('type', 4)->orderBy('ordering','asc')->get();
       $news = $this->newsRepo->all();
       if (config('global.device') != 'pc') {
            return view('mobile/home/index', compact('hot_products' , 'new_products','combo_products', 'slides' , 'advance_products', 'luxury_products', 'best_sell_products', 'news','popular_total','trends'));
       } else {
            return view('frontend/home/index', compact('hot_products' , 'new_products','combo_products', 'slides' , 'advance_products', 'luxury_products', 'best_sell_products', 'news', 'popular_total','trends'));
       }
    }

    public function about(){
        return view('frontend/about/index');
    }

    public function contact(){
        return view('frontend/about/contact');
    }

    public function sendContact(Request $request){
        $input = $request->except('_token');
        $input['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        $input['is_read'] = 0;
        DB::table('contact')->insert($input);
        return redirect()->route('home.index')->with('success',"Thành công, chúng tôi sẽ sớm liên hệ lại với bạn");
    }

    public function galerry(){
        $galerry = DB::table('product')->where('feedback', '!=', null)->orderBy('updated_at','desc')->get();
        return view('frontend/gallery/index', compact('galerry'));
    }

}
