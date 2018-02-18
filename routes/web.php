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
Route::post('/insert', "Controller@insertForm");
Route::get('/', function () {
    return view('index');
});
Route::resource('catalog','ProductsController');
Route::resource('customer','CustomerController');
Route::resource('employee','EmployeeController');
Route::resource('orders','OrderController');
Route::get('/order', 'OrderController@show')->name('orderdetails');
Route::put('/order', 'OrderController@edit')->name('orderclose');
Route::resource('payment','PaymentController');
Route::resource('user','UserController');
Route::resource('shoppingcart','CartController');
Route::resource('index','IndexController');
Route::resource('register','RegisterController');
Route::resource('orderdetails','OrderDetailsController');
/*Route::resource('','');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('home_store');
/*Route::get('/', function(){
  return view('insertForm');
});*/
