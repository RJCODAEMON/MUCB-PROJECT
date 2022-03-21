<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function display()
    {
        $data = Package::all();
        return view('home',['packages'=>$data]);

    }
    function all_products()
    {
        $data = Package::all();
        return view('allproduct',['packages'=>$data]);

    }
    function details($id)
    {
         $data = DB::table('packages')
            ->select()
            ->where('package_id','=',$id)
            ->get();
           return view('product',['packages'=>$data]);

    }
}
