<?php


///user routes
Route::group(['namespace' => 'User'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('post/{post}', 'PostController@post')->name('post');
    Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category}', 'HomeController@category')->name('category');
});

///Admin routes
Route::group(['namespace' => 'admin'], function(){
    //home admin
    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    ///user routes
    Route::resource('admin/user', 'UserController');

    ///posts routes
    Route::resource('admin/post', 'PostController');

    //tag routes
    Route::resource('admin/tag', 'TagController');

    //category routes
    Route::resource('admin/category', 'CategoryController');
});

