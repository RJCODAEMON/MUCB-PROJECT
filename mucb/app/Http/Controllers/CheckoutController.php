<?php

namespace App\Http\Controllers;

use App\Mail\UserRegister;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\orders;
use App\Models\orderinfo;
use App\Models\user_roles;
use App\Models\vehicalinfo;
use App\Models\Package;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
// use Carbon\Carbon;
// use Exception;
// use PharIo\Manifest\Email;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{

    function display($id)
    {
        $data = Package::where('package_id', $id)->get();
        return view('checkout', ['packages' => $data]);
    }


    function save(Request $req)
    {
        $req->validate(
            [
                'fname'  => 'required',
                'lname'  => 'required',
                'email'  => 'required|email|unique:users,email',
                'phone' => 'required|digits:10',
                'mobile' =>'required|digits:10',
                'country'=> 'required|not_in:1',
                'street_add1'=> 'required',
                'state'=> 'required|not_in:1',
                'zipcode'=> 'required',


                'dealership_name' => 'required',
                'saleperson_name' => 'required',
                'saleperson_phno' => 'required',
                'vin' => 'required',
                'year' => 'required',
                'make' => 'required',
                'model' => 'required',
                'loc_city' => 'required',
                'reference' => 'required|not_in:1'

            ],
            [
                'fname.required'=>'Please Enter First Name',
                'lname.required'=>'Please Enter Last Name',
                'email.required'=>'Please Enter Email',
                'email.email'=>'Please Enter Abc@abc.com',
                'email.unique'=>'Already Taken',
                'phone.required'=>'Please Enter Phone Number',
                'phone.digits'=>'Please Enter Valid Numbers Only',
                'mobile.required'=>'Please Enter Mobile',
                'mobile.digits'=>'Please Enter Valid Numbers Only',
                'country.required'=>'Please Select Country',
                'street_add1.required'=>'Please Enter Street Address',
                'state.required'=>'Please Select State',
                'zipcode.required'=>'Please Enter Zip Code',

                'dealership_name' => 'Please Enter Dealership Name ',
                'saleperson_name' => 'Please Enter Salesperson Name',
                'saleperson_phno' => 'Please Enter SalesPerson Phone',
                'vin' => 'Please Enter VIN number',
                'year' => 'Please Enter Year',
                'make' => 'Please Enter Make',
                'model' => 'Please Enter Model',
                'loc_city' => 'Please Enter City',
                'reference' => 'Please Select Refrence'

            ]);

            $GLOBALS['orderid']=0;

      $result = DB::transaction(function () use ($req) {

            $user = new User;
            $user->fname = $req->input('fname');
            $user->lname = $req->input('lname');
            $user->email = $req->input('email');
            $user->phone = $req->input('phone');
            $user->mobile = $req->input('mobile');
            $password = Str::random(8);
            $user->password = Hash::make($password);

            $user->save();

            $orderinfo = new orderinfo;
            $orderinfo->company_name = $req->input('company_name');
            $orderinfo->country = $req->input('country');
            $orderinfo->street_add1 = $req->input('street_add1');
            $orderinfo->street_add2 = $req->input('street_add2');
            $orderinfo->state = $req->input('state');
            $orderinfo->zipcode = $req->input('zipcode');
            $orderinfo->save();

            $vehicalinfo = new vehicalinfo;

            $vehicalinfo->dealership_name = $req->input('dealership_name');
            $vehicalinfo->dealership_phno = $req->input('dealership_phno');
            $vehicalinfo->saleperson_name = $req->input('saleperson_name');
            $vehicalinfo->saleperson_phno = $req->input('saleperson_phno');
            $vehicalinfo->vin = $req->input('vin');
            $vehicalinfo->stock = $req->input('stock');
            $vehicalinfo->year = $req->input('year');
            $vehicalinfo->make = $req->input('make');
            $vehicalinfo->model = $req->input('model');
            $vehicalinfo->trim = $req->input('trim');
            $vehicalinfo->ext_color = $req->input('ext_color');
            $vehicalinfo->phy_add = $req->input('phy_add');
            $vehicalinfo->loc_city = $req->input('loc_city');
            $vehicalinfo->loc_zip = $req->input('loc_zip');
            $vehicalinfo->more_info = $req->input('more_info');
            $vehicalinfo->reference = $req->input('reference');
            $vehicalinfo->save();

            $orders = new orders;
            $orders->package_id = $req->input('package_id');;
            $orders->user_id = $user->id;
            $orders->price = $req->input('price');;
            $orders->orderinfo_id = $orderinfo->id;
            $orders->vehicalinfo_id = $vehicalinfo->id;
            $orders->save();
            $GLOBALS['orderid']=$orders->id;

            $data = [

                        'fname' => $user->fname,
                        'lname' => $user->lname,
                        'email' => $user->email,
                        'password' =>  $password,
                        'orderid' =>$GLOBALS['orderid']
                    ];

            Mail::to($user->email)->send(new UserRegister($data));
            return back();


       });

        if($result==true)
        {
            // return redirect()->back()->with(['message' => 'A message to display']);
             return view('/thankyou',['orderid'=>$GLOBALS['orderid']]);
            // return $GLOBALS['orderid']."OK";
        }
    }
}
