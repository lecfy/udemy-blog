<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home_index');
    }

    public function register()
    {
        return view('home_register');
    }
}
