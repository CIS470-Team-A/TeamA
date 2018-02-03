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
    return view('index');
});
Route::resource('catalog','ProductsController');
Route::resource('customer','CustomerController');
Route::resource('employee','EmployeeController');
Route::resource('order','OrderController');
Route::resource('payment','PaymentController');
Route::resource('user','UserController');
Route::resource('shoppingcart','ShoppingCartController');
Route::resource('index','IndexController');
/*Route::resource('','');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
