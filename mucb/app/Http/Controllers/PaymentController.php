<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use App\Mail\UserRegister;
use App\Models\User;
use App\Models\orders;
use App\Models\orderinfo;
use App\Models\user_roles;
use App\Models\vehicalinfo;
use App\Models\Package;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\PaymentDetails;
use App\Models\PaymentFailure;
use Carbon\Traits\Timestamp;
use Session;

class PaymentController extends Controller
{
    private $razorpayId = "rzp_test_pYwBJ1cGx8QJpU";
    private $razorpayKey = "0R60OYjk4j6m2gqgMvvK60Ma";

    public function Initiate(Request $request)
    {
        $req = $request;
        $request->validate(
            [
                'name'  => 'required',
                // 'lname'  => 'required',
                'email'  => 'required|email|unique:users,email',
                'phone' => 'required|digits:10',
                'mobile' => 'required|digits:10',
                'country' => 'required|not_in:1',
                'street_add1' => 'required',
                'state' => 'required|not_in:1',
                'zipcode' => 'required',


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
                'name.required' => 'Please Enter First Name',
                // 'lname.required' => 'Please Enter Last Name',
                'email.required' => 'Please Enter Email',
                'email.email' => 'Please Enter Abc@abc.com',
                'email.unique' => 'Already Taken',
                'phone.required' => 'Please Enter Phone Number',
                'phone.digits' => 'Please Enter Valid Numbers Only',
                'mobile.required' => 'Please Enter Mobile',
                'mobile.digits' => 'Please Enter Valid Numbers Only',
                'country.required' => 'Please Select Country',
                'street_add1.required' => 'Please Enter Street Address',
                'state.required' => 'Please Select State',
                'zipcode.required' => 'Please Enter Zip Code',

                'dealership_name' => 'Please Enter Dealership Name ',
                'saleperson_name' => 'Please Enter Salesperson Name',
                'saleperson_phno' => 'Please Enter SalesPerson Phone',
                'vin' => 'Please Enter VIN number',
                'year' => 'Please Enter Year',
                'make' => 'Please Enter Make',
                'model' => 'Please Enter Model',
                'loc_city' => 'Please Enter City',
                'reference' => 'Please Select Refrence'

            ]
        );



        // Generate random receipt id
        $receiptId = Str::random(20);

        // Create an object of razorpay
        $api = new Api($this->razorpayId, $this->razorpayKey);

        // In razorpay you have to convert rupees into paise we multiply by 100
        // Currency will be INR
        // Creating order
        $order = $api->order->create(
            array(

                'receipt' => $receiptId,
                'amount' => $request->all()['price'] * 100,
                'currency' => 'INR'
            )
        );

        $GLOBALS['orderid'] = 0;
        $GLOBALS['razorpay_order_id'] = $order['id'];


        $result = DB::transaction(function () use ($req) {

            $user = new User;
            $user->name = $req->input('name')." ".$req->input('lname');
            // $user->lname = $req->input('lname');
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

            $pay = new PaymentDetails;
            $pay->razorpay_order_id     = $GLOBALS['razorpay_order_id'];
            $pay->save();

            $orders = new orders;
            $orders->package_id = $req->input('package_id');;
            $orders->user_id = $user->id;
            $orders->price = $req->input('price');
            $orders->orderinfo_id = $orderinfo->id;
            $orders->vehicalinfo_id = $vehicalinfo->id;
            $orders->payment_details = $pay->id;
            $orders->save();
            $GLOBALS['orderid'] = $orders->id;
        });


        // Return response on payment page
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $request->all()['price'] * 100,
            'name' => $request->all()['name'],
            'currency' => 'INR',
            'email' => $request->all()['email'],
            'contactNumber' => $request->all()['mobile'],
            // 'address' => $request->all()['address'],
            'description' => 'Testing description',


        ];

        // Let's checkout payment page is it working
        return view('payment-page', compact('response'));
    }

    public function Complete(Request $request)
    {
        $req = $request;
        // Now verify the signature is correct . We create the private function for verify the signature
        $signatureStatus = $this->SignatureVerify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid']
        );

        // If Signature status is true We will save the payment response in our database
        // In this tutorial we send the response to Success page if payment successfully made

        if ($signatureStatus == true) {

            $data = $request->all()['rzp_orderid'];
            $paymentId = $request->all()['rzp_paymentid'];
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $api->order->fetch($data)->payments();

            $captured =  $api->payment->fetch($paymentId);

            $payment = PaymentDetails::where('razorpay_order_id', $data)->first();
            $payment->razorpay_payment_id = $paymentId;
            $payment->status = $captured->status;
            $payment->method = $captured->method;
            $payment->captured = $captured->captured;
            $payment->save();

            $result = DB::select("SELECT * FROM users WHERE id = (SELECT user_id FROM orders WHERE payment_details=(SELECT id FROM payment_details WHERE payment_details.captured=1 AND razorpay_payment_id ='$paymentId'));");
            $result = $result['0'];

            $password = Str::random(8);
            $user = User::where('id', $result->id);
            $user->password = Hash::make($password);


            $email_data = [

                'name' => $result->name,
                // 'lname' => $result->lname,
                'email' => $result->email,
                'password' => $password,
                'orderid' => $data
            ];


            $amount = ($captured->amount)/100;
            Mail::to($result->email)->send(new UserRegister($email_data));
            Session::put('success', 'Payment successful');
            return view('/thankyou',[ 'orderid' =>$data, 'amount'=>$amount]);
            // return $captured->amount;
        }
        else
        {
            // You can create this page

            $data = $request->all()['rzp_orderid'];
            $paymentId = $request->all()['rzp_paymentid'];

            $orderid = PaymentDetails::where("razorpay_order_id", $data)->value('id');
            $order = orders::where("payment_details", $orderid)->get();

            $order = $order['0'];
            $orderinfo = orderinfo::where("order_info_id", $order['orderinfo_id']);
            $orderinfo->delete();
            $vehicalinfo = vehicalinfo::where("vehicalinfo_id", $order['vehicalinfo_id']);
            $vehicalinfo->delete();
            $user = User::where("id", $order['user_id']);
            $user->delete();
            $pay = PaymentDetails::where("razorpay_order_id", $data);
            $pay->delete();



            $data = $request->all()['rzp_orderid'];
            $paymentId = $request->all()['rzp_paymentid'];

            $api = new Api($this->razorpayId, $this->razorpayKey);

            $api->order->fetch($data)->payments();

            $captured =  $api->payment->fetch($paymentId);
            $payment = PaymentDetails::where('razorpay_order_id', $data)->first();

            $fail = new PaymentFailure;
            $fail->payment_id = $captured->id;
            $fail->currency = $captured->currency;
            $fail->status = $captured->status;
            $fail->method = $captured->method;
            $fail->captured = $captured->captured;
            $fail->description = $captured->description;
            $fail->card_id = $captured->card_id;
            $fail->bank = $captured->bank;
            $fail->wallet = $captured->wallet;
            $fail->vpa = $captured->vpa;
            $fail->email = $captured->email;
            $fail->contact = $captured->contact;
            $fail->error_code = $captured->error_code;
            $fail->error_description = $captured->error_description;
            $fail->error_source = $captured->error_source;
            $fail->error_step = $captured->error_step;
            $fail->error_reason = $captured->error_reason;
            $fail->save();


             return view('payment-failed-page');
        }
    }

    // In this function we return boolean if signature is correct
    private function SignatureVerify($_signature, $_paymentId, $_orderId)
    {
        try {
            // Create an object of razorpay class
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId,  'razorpay_order_id' => $_orderId);
            $order  = $api->utility->verifyPaymentSignature($attributes);

            return true;
        } catch (\Exception $e) {
            // If Signature is not correct its give a excetption so we use try catch
            return false;
        }
    }
}
