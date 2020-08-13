<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('layout/master');
//});

Route::prefix('/admin')->group(function (){
    Route::get('/home', 'AdminController@indexAdmin')->name('admin.index');
    Route::get('/products/list', 'AdminController@indexProduct')->name('products.index');
    Route::get('/products/create', 'AdminController@createProduct')->name('products.create');
    Route::post('/products/create', 'AdminController@storeProduct')->name('products.store');
});


Route::prefix('/styled-by-me')->group(function (){
    Route::get('/products/list','ProductController@index')->name('styled-by-me.index');
});
