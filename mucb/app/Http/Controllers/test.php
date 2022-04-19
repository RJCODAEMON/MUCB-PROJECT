<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    function index()
    {
       return view('welcome',['data'=>"Heelo",'amount'=>100]);
    }
}
