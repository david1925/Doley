<?php
use Doley\Product;
use Doley\Exception;
use Doley\Appoinment;

Route::get('/', 'PagesController@index');

Route::get('/appoinment', function(){
    // $appoinment = Appoinment::first();
    // dd($appoinment);
    return view('appoinmentForm');
})->name('appoinmentForm');

Route::get('/customer/{id?}', 'PagesController@customerMain')->name('customer');

Route::get('/product', function(){
    // $product = Product::first();    
    // dd($product);
    return view('productForm');      
})->name('productForm');

Route::get('/exception', function(){
    $exception = Exception::first();    
    dd($exception);        
});

Route::get('/login', function(){
    return view('login');       
});