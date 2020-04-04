<?php

namespace Doley\Http\Controllers;

use Illuminate\Http\Request;
use Doley\Customer;


class PagesController extends Controller
{
    public function index(){
        return view('calendar');
    }

    public function customerMain($id = null, $service = null){

        $customerController = new CustomerController;
        $servicesCustomer = null;
        if($id == null ){
            $customers = $customerController->getMainCustomers();     
        }else if($service == 'color') {
            $customers = $customerController->getCustomerDetails($id);
            $servicesCustomer = $customerController->getCustomerServiceColor($id);     
        }else if($service == 'all'){          
            $customers = $customerController->getCustomerDetails($id);
            $servicesCustomer = $customerController->getCustomerService($id);  
        }
        return view('customer', compact('customers', 'servicesCustomer','service','id'));        
    }

    public function addCustomerView(){
        return view('customerForm');
    }

    /*public function addServiceToCustomerView($id){
        return view('addServiceToCustomerForm');
    }*/

    public function addCustomer(Request $request){
        $customerController = new CustomerController;
        $customerController->addCustomer($request);
    }

    public function editCustomerView($id){
        $customerController = new CustomerController;
        $customer = $customerController->getCustomerDetails($id);        
        return view('customerForm',compact('id','customer'));
    }

    public function editCustomer(Request $request,$id){
        $customerController = new CustomerController;
        $customerController->editCustomer($request,$id);
    }

    public function addServiceToCustomerView(Request $request, $id){
        $customerController = new CustomerController;
        $customerController->addServiceToCustomer($request,$id);
    }
}
