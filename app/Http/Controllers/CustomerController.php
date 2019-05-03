<?php

namespace Doley\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    public function getMainCustomers(){
        $customers = DB::table('customer')       
        ->join('appoinment','customer.id','=','appoinment.customer_id')
        ->join('service','appoinment.service_id','=','service.id')        
        ->select('customer.*','service.name AS serviceName','appoinment.day')
        ->orderBy('appoinment.day','desc')
        ->get();
        return $customers;
    }
}
