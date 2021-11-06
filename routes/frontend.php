<?php

Route::group(['middleware' => 'frontend'], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'Frontend\FrontendController@index']);

    /* Sản phẩm */
    Route::get('/san-pham', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index']);
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

    // Contact
    Route::get('/don-hang', ['as' => 'order.index', 'uses' => 'Frontend\OrderController@order']);

});
