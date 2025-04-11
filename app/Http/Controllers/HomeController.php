<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function tampilHome()  {
        return view('/home/home');
    }
}
