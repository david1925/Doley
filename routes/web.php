<?php
use Doley\Product;
use Doley\Exception;
use Doley\Appoinment;

Route::get('/', 'PagesController@index')->name('calendar');

Route::get('/appoinment', function(){
    return view('appoinmentForm');
})->name('appoinmentForm');

Route::get('/customer/{id?}/{service?}', 'PagesController@customerMain')->name('customer');

Route::get('/product', function(){
    return view('productForm');      
})->name('productForm');

Route::get('/addCustomerView', 'PagesController@addCustomerView')->name('addCustomerView');

Route::post('/addCustomer', 'PagesController@addCustomer')->name('addCustomer');

Route::get('/editCustomerView/{id}', 'PagesController@editCustomerView')->name('editCustomerView');

Route::post('/editCustomer/{id}', 'PagesController@editCustomer')->name('editCustomer');

Route::get('/addServiceToCustomerView/{id}', 'PagesController@addServiceToCustomerView')->name('addServiceToCustomerView');

Route::get('/exception', function(){
    $exception = Exception::first();    
    dd($exception);        
});

Route::get('/login', function(){
    return view('login');       
});
