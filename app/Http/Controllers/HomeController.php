<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function tampilHome()  {
        return view('/home/home');
    }

    function tampiluser()  {
        return view('/home/user');
    }

    function tampiladmin()  {
        return view('/home/admin');
    }

    function tampildevelopmen()  {
        return view('/home/developmen');
    }

}
