<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function hello(){
        return view('frontend.pages.home');
    }
    public function about(){
        return view('frontend.pages.home');
    }
    
}
