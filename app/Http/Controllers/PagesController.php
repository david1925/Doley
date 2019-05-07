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
        if($id == null ){
            $customers = $customerController->getMainCustomers();     
        }else{
            $customers = $customerController->getCustomerDetails($id);
            $servicesCustomer = $customerController->getCustomerServiceColor($id);
        }
        
        return view('customer', compact('customers','servicesCustomer','id'));
    }
}
