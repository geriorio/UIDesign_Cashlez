<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    //


    public function home(){
        return view('home');
    }
    public function product(){
        return view('product');
    }
    public function contact(){
        return view('aboutus');
    }
}
