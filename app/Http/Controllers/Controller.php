<?php

namespace App\Http\Controllers;

abstract class Controller
{
    function tampilRegistrasi() {
        return view('registrasi');
    }
}
