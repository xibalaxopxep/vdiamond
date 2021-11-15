<?php

Route::group(['middleware' => 'frontend'], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'Frontend\FrontendController@index']);

    /* Sản phẩm */
    Route::get('/san-pham', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index']);
    Route::get('/danh-muc/{alias}', ['as' => 'product.category', 'uses' => 'Frontend\ProductController@category']);
    Route::get('/sale', ['as' => 'product.sale', 'uses' => 'Frontend\ProductController@sale']);
    Route::get('/san-pham/{alias}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail']);

    /* Tin tuc */
    Route::get('/tin-tuc', ['as' => 'news.index', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/danh-muc-tin/{alias}', ['as' => 'news_category.index', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/tin-tuc/{alias}', ['as' => 'news.detail', 'uses' => 'Frontend\NewsController@detail']);

    // Giỏ hàng
    Route::get('/gio-hang', ['as' => 'checkout.index', 'uses' => 'Frontend\OrderController@index']);

    // Điều khoản
    Route::get('/gioi-thieu', ['as' => 'about.index', 'uses' => 'Frontend\FrontendController@about']);

    // Contact
    Route::get('/lien-he', ['as' => 'contact.index', 'uses' => 'Frontend\FrontendController@contact']);
    Route::post('/gui-lien-he', ['as' => 'sendContact', 'uses' => 'Frontend\FrontendController@sendContact']);

    // Contact
    Route::post('/dat-hang', ['as' => 'order.index', 'uses' => 'Frontend\OrderController@order']);

    // Khách Hàng
    Route::get('/hinh-anh', ['as' => 'galerry.index', 'uses' => 'Frontend\FrontendController@galerry']);

    //Thêm giỏ hàng
    Route::post('/add-to-cart/{id}', ['as' => 'addToCart', 'uses' => 'Frontend\OrderController@addToCart']);
    
    //chi tiết  đặt hàng
    Route::get('/don-hang/{id}', ['as' => 'order.detail', 'uses' => 'Frontend\OrderController@detail']);

    //search
    Route::get('/tim', ['as' => 'product.search', 'uses' => 'Frontend\ProductController@search']);



});
