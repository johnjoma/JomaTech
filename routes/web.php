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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('about','StaticpagesController@aboutpage');
Route::get('contact','StaticpagesController@contact');
Route::get('portfolio-single','StaticpagesController@portfoliosingle');
Route::get('portfolio','StaticpagesController@portfolio');
Route::get('portfolio2','StaticpagesController@portfolio2');
Route::get('services','StaticpagesController@services');
