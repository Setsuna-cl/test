<?php

namespace App\Http\Controllers\houtai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class TestController extends Controller
{
    //
    public function show(){
    	echo "this is houtai controller!!";
    }

    public function getTest(){
    	echo Input::get('id','10086');
    	$all = Input::all();
    	dd($all);
    }
}
