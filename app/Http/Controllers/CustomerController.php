<?php

namespace Doley\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Doley\Customer;
use Mockery\Exception;

class CustomerController extends Controller
{
    public function getMainCustomers(){
        try{
            $customers = DB::table('customer')     
            ->join('appoinment','customer.id','=','appoinment.customer_id')
            ->join('service','appoinment.service_id','=','service.id')        
            ->select('customer.*','service.name AS serviceName',DB::raw('MAX(appoinment.day) as day'))
            ->groupBy('customer.id')
            ->orderBy('appoinment.day','desc')        
            ->get();            
        }catch(Exception $e){
            $exceptionController = new ExceptionController;
            $exceptionController->createTrace($e->getMessage(),get_class($this),__FUNCTION__);
        }        
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

    public function addCustomer($request){
        Customer::create([
            'name' => request()->name,
            'lastname' => request()->lastname,
            'phone' => request()->phone,
            'discharge_date' => request()->discharge_date,    
            'email' => request()->email,
            'gender' => request()->gender,
            'postal_code' => request()->postal_code,
            'right_image' => request()->right_image,
            'birthdate' => request()->birthdate,
            'observations' => request()->observations
        ]);
    }

    public function editCustomer($request,$id){
        $customer = Customer::find($id);
        $customer->name = request()->name;
        $customer->lastname = request()->lastname;
        $customer->phone = request()->phone;
        $customer->discharge_date = request()->discharge_date;
        $customer->email = request()->email;
        $customer->gender = request()->gender;
        $customer->postal_code = request()->postal_code;
        $customer->right_image = request()->right_image;
        $customer->birthdate = request()->birthdate;
        $customer->observations = request()->observations;
        $customer->save();
    }    

    public function getCustomers(){
        try{
            $customers = DB::table('customer')
            ->select('customer.name','customer.lastname')            
            ->orderBy('customer.lastname','asc')
            ->get(); 
        }catch(Exception $e){
            $exceptionController = new ExceptionController;
            $exceptionController->createTrace($e->getMessage(),get_class($this),__FUNCTION__);
        }
    }

    public function getCustomerById($customerId){
        try{
            $customers = DB::table('customer')
            ->select('customer.*')
            ->where('customer.customer_id','=',$customerId)
            ->get();
        }catch(Exception $e){
        }
    }

    /*public function addServiceToCustomer($request, $id){
        $customer = Customer::find($id);
        var_dump($customer);
    }*/
}
