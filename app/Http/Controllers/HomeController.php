<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Metodo general
    public function __invoke() {
        return view('home');
    }
}
