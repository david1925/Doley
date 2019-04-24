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

use Doley\Customer;
use Doley\Product;
use Doley\Exception;
use Doley\Appoinment;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main');
});

Route::get('/appoinment', function(){
    $appoinment = Appoinment::first();    
    dd($appoinment);        
});

Route::get('/customer', function(){
    $customer = Customer::first();    
    dd($customer);        
});

Route::get('/product', function(){
    $product = Product::first();    
    dd($product);        
});

Route::get('/exception', function(){
    $exception = Exception::first();    
    dd($exception);        
});