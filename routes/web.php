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

Route::get('/', function () {
    return view('main');
});

Route::get('/appoinment', function(){
    // $appoinment = Appoinment::first();
    // dd($appoinment);
    return view('appoinmentForm');
})->name('appoinmentForm');

Route::get('/customer', function(){
     $customer = Customer::first();
    // dd($customer);
    return view('customerForm', ['customer'=>$customer]);
})->name('customerForm');

Route::get('/product', function(){
    // $product = Product::first();    
    // dd($product);
    return view('productForm');      
})->name('productForm');

Route::get('/exception', function(){
    $exception = Exception::first();    
    dd($exception);        
});