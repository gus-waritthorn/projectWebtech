<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', ['middleware' => 'auth', function(){
    return view('home');
}]);

Route::get('/mypoint', ['middleware' => ['std', 'auth'], function () {
    return view('voucher');
}]);

Route::post('updatepromotion', 'updatepromotionController@update');

Route::post('updatelink', 'updatelink@update');

Route::post('addCourse', 'regiscourseController@add');

Route::get('/admin', ['middleware' => ['admin', 'auth'], function () {
    return view('admin');
}]);

Route::post('addTeacher','teacherController@add');

Route::post('createCourse','courseController@create');
