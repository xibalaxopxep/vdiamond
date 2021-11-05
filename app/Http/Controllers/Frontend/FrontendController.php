<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;

class FrontendController extends Controller {

    public function __construct(CategoryRepository $categoryRepo) {
        $this->categoryRepo = $categoryRepo;
    }

    public function index() {
        $category_arr = $this->categoryRepo->readHomeProductCategory();
       if (config('global.device') != 'pc') {
            return view('mobile/home/index');
        } else {
            return view('frontend/home/index');
        }
    }

    public function about(){
        return view('frontend/about/index');
    }

}
