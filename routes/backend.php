<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'Backend\BackendController@index']);
    /* Cấu hình website */
    Route::get('/config', ['as' => 'admin.config.index', 'uses' => 'Backend\ConfigController@index']);
    Route::post('/config/update/{id}', ['as' => 'admin.config.update', 'uses' => 'Backend\ConfigController@update']);

    /* Quản lý danh mục */
    Route::get('/category/{type}', ['as' => 'admin.category.index', 'uses' => 'Backend\CategoryController@index']);
    Route::get('/category/{type}/create', ['as' => 'admin.category.create', 'uses' => 'Backend\CategoryController@create']);
    Route::get('/category/{type}/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'Backend\CategoryController@edit']);
    Route::post('/category/{type}/store', ['as' => 'admin.category.store', 'uses' => 'Backend\CategoryController@store']);
    Route::post('/category/{type}/update/{id}', ['as' => 'admin.category.update', 'uses' => 'Backend\CategoryController@update']);
    Route::delete('/category/{type}/delete/{id}', ['as' => 'admin.category.destroy', 'uses' => 'Backend\CategoryController@destroy']);

    /* Quản lý news */
    Route::get('/news', ['as' => 'admin.news.index', 'uses' => 'Backend\NewsController@index']);
    Route::get('/news/create', ['as' => 'admin.news.create', 'uses' => 'Backend\NewsController@create']);
    Route::post('/news/store', ['as' => 'admin.news.store', 'uses' => 'Backend\NewsController@store']);
    Route::get('/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Backend\NewsController@edit']);
    Route::post('/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Backend\NewsController@update']);
    Route::delete('/news/delete/{id}', ['as' => 'admin.news.destroy', 'uses' => 'Backend\NewsController@destroy']);

    /* Quản lý product */
    Route::get('/product', ['as' => 'admin.product.index', 'uses' => 'Backend\ProductController@index']);
    Route::get('/product/create', ['as' => 'admin.product.create', 'uses' => 'Backend\ProductController@create']);
    Route::post('/product/store', ['as' => 'admin.product.store', 'uses' => 'Backend\ProductController@store']);
    Route::get('/product/edit/{id}', ['as' => 'admin.product.edit', 'uses' => 'Backend\ProductController@edit']);
    Route::post('/product/update/{id}', ['as' => 'admin.product.update', 'uses' => 'Backend\ProductController@update']);
    Route::delete('/product/delete/{id}', ['as' => 'admin.product.destroy', 'uses' => 'Backend\ProductController@destroy']);

    /* Quản lý attribute */
    Route::get('/attribute', ['as' => 'admin.attribute.index', 'uses' => 'Backend\AttributeController@index']);
    Route::get('/attribute/create', ['as' => 'admin.attribute.create', 'uses' => 'Backend\AttributeController@create']);
    Route::post('/attribute/store', ['as' => 'admin.attribute.store', 'uses' => 'Backend\AttributeController@store']);
    Route::get('/attribute/edit/{id}', ['as' => 'admin.attribute.edit', 'uses' => 'Backend\AttributeController@edit']);
    Route::post('/attribute/update/{id}', ['as' => 'admin.attribute.update', 'uses' => 'Backend\AttributeController@update']);
    Route::delete('/attribute/delete/{id}', ['as' => 'admin.attribute.destroy', 'uses' => 'Backend\AttributeController@destroy']);

    /* Quản lý user */
    Route::get('/user', ['as' => 'admin.user.index', 'uses' => 'Backend\UserController@index']);
    Route::get('/user/create', ['as' => 'admin.user.create', 'uses' => 'Backend\UserController@create']);
    Route::post('/user/store', ['as' => 'admin.user.store', 'uses' => 'Backend\UserController@store']);
    Route::get('/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Backend\UserController@edit']);
    Route::post('/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Backend\UserController@update']);
    Route::delete('/user/delete/{id}', ['as' => 'admin.user.destroy', 'uses' => 'Backend\UserController@destroy']);

    Route::get('/user/edit_profile/{id}', ['as' => 'admin.user.index_profile', 'uses' => 'Backend\UserController@editProfile']);
    Route::post('/user/update_profile/{id}', ['as' => 'admin.user.update_profile', 'uses' => 'Backend\UserController@updateProfile']);

    /* Quản lý quyền */
    Route::get('/role', ['as' => 'admin.role.index', 'uses' => 'Backend\RoleController@index']);
    Route::get('/role/create', ['as' => 'admin.role.create', 'uses' => 'Backend\RoleController@create']);
    Route::post('/role/store', ['as' => 'admin.role.store', 'uses' => 'Backend\RoleController@store']);
    Route::get('/role/edit/{id}', ['as' => 'admin.role.edit', 'uses' => 'Backend\RoleController@edit']);
    Route::post('/role/update/{id}', ['as' => 'admin.role.update', 'uses' => 'Backend\RoleController@update']);
    Route::delete('/role/delete/{id}', ['as' => 'admin.role.destroy', 'uses' => 'Backend\RoleController@destroy']);

    /* Menu*/
    Route::get('/menu', ['as' => 'admin.menu.index', 'uses' => 'Backend\MenuController@index']);
    Route::get('/menu/create', ['as' => 'admin.menu.create', 'uses' => 'Backend\MenuController@create']);
    Route::get('/menu/edit/{id}', ['as' => 'admin.menu.edit', 'uses' => 'Backend\MenuController@edit']);
    Route::post('/menu/store', ['as' => 'admin.menu.store', 'uses' => 'Backend\MenuController@store']);
    Route::post('/menu/update/{id}', ['as' => 'admin.menu.update', 'uses' => 'Backend\MenuController@update']);
    Route::delete('/menu/delete/{id}', ['as' => 'admin.menu.destroy', 'uses' => 'Backend\MenuController@destroy']);

    /* Slide*/
    Route::get('/slide', ['as' => 'admin.slide.index', 'uses' => 'Backend\SlideController@index']);
    Route::get('/slide/create', ['as' => 'admin.slide.create', 'uses' => 'Backend\SlideController@create']);
    Route::get('/slide/edit/{id}', ['as' => 'admin.slide.edit', 'uses' => 'Backend\SlideController@edit']);
    Route::post('/slide/store', ['as' => 'admin.slide.store', 'uses' => 'Backend\SlideController@store']);
    Route::post('/slide/update/{id}', ['as' => 'admin.slide.update', 'uses' => 'Backend\SlideController@update']);
    Route::delete('/slide/delete/{id}', ['as' => 'admin.slide.destroy', 'uses' => 'Backend\SlideController@destroy']);

    /* Liên hệ*/
    Route::get('/contact', ['as' => 'admin.contact.index', 'uses' => 'Backend\ContactController@index']);
    Route::delete('/contact/delete/{id}', ['as' => 'admin.contact.destroy', 'uses' => 'Backend\ContactController@destroy']);
    Route::get('/contact/show/{id}', ['as' => 'admin.contact.edit', 'uses' => 'Backend\ContactController@show']);
    
    /* Đơn hàng*/
    Route::get('/order', ['as' => 'admin.order.index', 'uses' => 'Backend\OrderController@index']);
    Route::delete('/order/delete/{id}', ['as' => 'admin.order.destroy', 'uses' => 'Backend\OrderController@destroy']);
    Route::get('/order/show/{id}', ['as' => 'admin.order.edit', 'uses' => 'Backend\OrderController@show']);


});
