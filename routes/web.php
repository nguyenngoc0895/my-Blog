<?php
// Route::get('/admin/home', function () {
//     return view('admin.layouts.admin');
// });

// Route::get('/admin/post', function () {
//     return view('admin.inc.post');
// });

// Route::get('/admin/tag', function () {
//     return view('admin.inc.tag');
// });

// Route::get('/admin/category', function () {
//     return view('admin.inc.category');
// });



// Route::get('/', function () {
//     return view('user.layouts.app');
// });

///user routes
Route::group(['namespace' => 'User'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('post', 'PostController@index') -> name('post');
});

///Admin routes
Route::group(['namespace' => 'admin'], function(){
    Route::get('admin/home', 'HomeController@index') -> name('admin.home');

    ///user routes
    Route::resource('admin/user', 'UserController');

    ///posts routes
    Route::resource('admin/post', 'PostController');

    //tag routes
    Route::resource('admin/tag', 'TagController');

    //category routes
    Route::resource('admin/category', 'CategoryController');
});

