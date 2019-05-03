<?php

namespace Doley\Http\Controllers;

use Illuminate\Http\Request;
use Doley\Customer;


class PagesController extends Controller
{
    public function index(){
        return view('main');
    }

    public function customerMain($id = null){

        $customerController = new CustomerController;
        $customers = $customerController->getMainCustomers();       
        return view('customer', compact('customers'));
    }
}
