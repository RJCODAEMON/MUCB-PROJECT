<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\orders;
use App\Models\orderinfo;
use App\Models\user_roles;
use App\Models\vehicalinfo;


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

            $orderinfo = new orderinfo;
            $orderinfo->company_name =$req->input('company_name');
            $orderinfo->country=$req->input('country');
            $orderinfo->street_add1=$req->input('street_add1');
            $orderinfo->street_add2=$req->input('street_add2');
            $orderinfo->state=$req->input('state');
            $orderinfo->zipcode=$req->input('zipcode');
            $orderinfo->save();

            $vehicalinfo = new vehicalinfo;

            $vehicalinfo->dealership_name=$req->input('dealership_name');
            $vehicalinfo->dealership_phno=$req->input('dealership_phno');
            $vehicalinfo->saleperson_name=$req->input('saleperson_name');
            $vehicalinfo->saleperson_phno=$req->input('saleperson_phno');
            $vehicalinfo->vin=$req->input('vin');
            $vehicalinfo->stock=$req->input('stock');
            $vehicalinfo->year=$req->input('year');
            $vehicalinfo->make=$req->input('make');
            $vehicalinfo->model=$req->input('model');
            $vehicalinfo->trim=$req->input('trim');
            $vehicalinfo->ext_color=$req->input('ext_color');
            $vehicalinfo->phy_add=$req->input('phy_add');
            $vehicalinfo->loc_city=$req->input('loc_city');
            $vehicalinfo->loc_zip=$req->input('loc_zip');
            $vehicalinfo->more_info=$req->input('more_info');
            $vehicalinfo->reference=$req->input('reference');
            $vehicalinfo->save();

            $orders = new orders;

            $orders->package_id='1';
            $orders->user_id=$user->id;
            $orders->price='1';
            $orders->orderinfo_id= $orderinfo->id;
            $orders->vehicalinfo_id= $vehicalinfo->id;
            $orders->save();


    }
}
