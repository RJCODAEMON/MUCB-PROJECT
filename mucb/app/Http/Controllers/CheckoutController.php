<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\orderinfo;
//use Illuminate\Database\Eloquent\Model;
use App\Models\user_roles;
use Illuminate\Support\Facades\Model;

class CheckoutController extends Controller
{
    //
    function save(Request $req)
    {
            $user = new User;
            $user->fname=$req->input('fname');
            $user->lname=$req->input('lname');
            $user->email=$req->input('email');
            $user->phone=$req->input('phone');
            $user->mobile=$req->input('mobile');
            $user->password=$req->input('mobile');
            $user->save();

            $useroles = new user_roles;
            $useroles->user_id= $user->id;


            $useroles->role_id="2";
            $useroles->save();

            $order = new orderinfo;
            $order->company_name =$req->input('company_name');
            $order->country=$req->input('country');
            $order->street_add1=$req->input('street_add1');
            $order->street_add2=$req->input('street_add2');
            $order->state=$req->input('state');
            $order->zipcode=$req->input('zipcode');
            $order->save();
    }
}
