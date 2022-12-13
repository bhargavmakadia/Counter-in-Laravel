<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class mycontroller extends Controller
{
    public function counter(){
        if (Session::has('counter')) {
        $currentvalue = Session::get("counter");
        $newvalue = $currentvalue + 1;
        echo "Counter Value is " . $newvalue;
        Session::put('counter',$newvalue);
        } else {
        echo "Counter Value is 1";
        Session::put('counter',1);
        }
        }
        
}
