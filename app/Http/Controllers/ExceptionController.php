<?php

namespace Doley\Http\Controllers;

use Illuminate\Http\Request;
use Doley\Exception;

class ExceptionController extends Controller
{
    public function createTrace($exception,$class,$method){
        Exception::create([
            'exception' => $exception,
            'class' => $class,
            'method' => $method            
        ]);
    }
}
