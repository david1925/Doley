<?php

namespace Doley\Http\Controllers;

use Illuminate\Http\Request;
use Doley\Exception;

class ExceptionController extends Controller
{
    public function insertTrace($exception,$class,$method){
        $exceptionObj = new Exception;
        $exceptionObj->exception = $exception;
        $exceptionObj->class = $class;
        $exceptionObj->method = $method; 
    }
}
