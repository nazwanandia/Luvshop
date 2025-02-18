<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function shop(){
        return view('home.shop');
    }

    public function checkout(){
        return view('home.checkout');
    }
}
