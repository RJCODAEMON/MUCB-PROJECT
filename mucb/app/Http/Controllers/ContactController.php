<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
        return "ok";
    }
}
