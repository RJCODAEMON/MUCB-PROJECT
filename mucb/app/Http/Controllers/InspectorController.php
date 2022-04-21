<?php

namespace App\Http\Controllers;

use App\Mail\InspectorRegister;
use Illuminate\Http\Request;
use App\Models\Appliedinspector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InspectorController extends Controller
{
    //
    function new_application(Request $req)
    {


        $req->validate([

            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'Mechanical_Experience' => 'required',
            'Inspection_Experience' => 'required',

        ]);

        DB::transaction(function () use ($req) {

            $appliedinspector = new Appliedinspector;
            $appliedinspector->name = $req->input('name');
            $appliedinspector->email = $req->input('email');
            $appliedinspector->phone = $req->input('phone');
            $appliedinspector->city = $req->input('city');
            $appliedinspector->zip = $req->input('zip');
            $appliedinspector->Mechanical_Experience = $req->input('Mechanical_Experience');
            $appliedinspector->Inspection_Experience = $req->input('Inspection_Experience');
            $appliedinspector->save();
            $data = [

                'name' => $appliedinspector->name,
               // 'lname' => $user->lname,
                'email' => $appliedinspector->email,

            ];
            Mail::to($appliedinspector->email)->send(new InspectorRegister($data));

            return redirect()->back()->with('success','success');


        });


    }
}
