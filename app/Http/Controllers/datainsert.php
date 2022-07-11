<?php

namespace App\Http\Controllers;

use App\Models\customer_data;
use Illuminate\Http\Request;

class datainsert extends Controller
{

    public function homepage(){
        return view('register');
    }
    

    public function inserdata(Request $request_body){
        
        $name  = $request_body->input('name');
        $age = $request_body->input('age');
        $phone = $request_body->input('phone');

        $isDataInserted = customer_data::insert(['name'=>$name,'age'=>$age,'phone'=>$phone]);
        if($isDataInserted)   echo '<h1>Data inserted successfull</h1>';
        else echo '<h1>There was a Error</h1>';
        
    }
}
