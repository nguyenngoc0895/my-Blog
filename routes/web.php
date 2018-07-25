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

    ///roles routes
    Route::resource('admin/role', 'RoleController');

    ///roles routes
    Route::resource('admin/permission', 'PermissionController');

    ///posts routes
    Route::resource('admin/post', 'PostController');

    //tag routes
    Route::resource('admin/tag', 'TagController');

    //category routes
    Route::resource('admin/category', 'CategoryController');

    //auth admin route
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
