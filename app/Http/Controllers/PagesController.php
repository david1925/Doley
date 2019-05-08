<?php

namespace Doley\Http\Controllers;

use Illuminate\Http\Request;
use Doley\Customer;


class PagesController extends Controller
{
    public function index(){
        return view('main');
    }

    public function customerMain($id = null, $service = null){

        $customerController = new CustomerController;
        $servicesCustomer = null;
        if($id == null ){
            $customers = $customerController->getMainCustomers();     
        }else if($service == 'color') {
            $customers = $customerController->getCustomerDetails($id);
            $servicesCustomer = $customerController->getCustomerServiceColor($id);     
        }else{          
            $customers = $customerController->getCustomerDetails($id);
            $servicesCustomer = $customerController->getCustomerService($id);  
        }
        return view('customer', compact('customers', 'servicesCustomer','id'));
        
    }
}
