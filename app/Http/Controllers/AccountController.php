<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        return view('account_index', [
            'title' => 'My Account'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
