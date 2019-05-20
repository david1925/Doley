<?php

namespace Doley\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Doley\Customer;

class CustomerController extends Controller
{
    public function getMainCustomers(){
        $customers = DB::table('customer')       
        ->join('appoinment','customer.id','=','appoinment.customer_id')
        ->join('service','appoinment.service_id','=','service.id')        
        ->select('customer.*','service.name AS serviceName',DB::raw('MAX(appoinment.day) as day'))
        ->groupBy('customer.id')
        ->orderBy('appoinment.day','desc')        
        ->get();

        /*$customers = DB::table($customers)
        ->select('customer.*','name','day')
        ->orderBy('day desc')
        ->get();*/

        return $customers;
    }

    public function getCustomerDetails($customerId){
        $customer = DB::table('customer')
        ->where('id','=',$customerId)
        ->select('customer.*')
        ->first();
        return $customer;
    }

    public function getCustomerServiceColor($customerId){
        $customer = DB::table('service')
        ->join('appoinment','service.id','=','appoinment.service_id')
        ->where('appoinment.customer_id','=',$customerId)
        ->where('service.name','like','%color%')
        ->select('service.name AS serviceName','service.price AS servicePrice',
                 'service.duration AS serviceDuration','appoinment.day AS day',
                 'appoinment.id AS appoinmentId')
        ->orderBy('appoinmentId','desc')
        ->get();
        return $customer;
    }

    public function getCustomerService($customerId){
        $customer = DB::table('service')
        ->join('appoinment','service.id','=','appoinment.service_id')
        ->where('appoinment.customer_id','=',$customerId)
        ->select('service.name AS serviceName','service.price AS servicePrice',
                 'service.duration AS serviceDuration','appoinment.day AS day',
                 'appoinment.id AS appoinmentId')
        ->orderBy('appoinmentId','desc')
        ->get();
        return $customer;
    }

    public function addCustomer(){
        
    }
}
