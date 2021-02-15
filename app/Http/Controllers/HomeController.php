<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home_index');
    }

    public function register(Request $request)
    {
        if ($request->post()) {
            $request->validate([
                'name' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            $userModel = new User();

            $userModel->name = $request->post('name');
            $userModel->email = $request->post('email');
            $userModel->password = password_hash( $request->post('password'), PASSWORD_DEFAULT);

            $userModel->save();

            return redirect('registerSuccess');
        }

        return view('home_register', [
            'title' => 'Sign Up'
        ]);
    }

    public function registerSuccess()
    {
        return view('home_registerSuccess', [
            'title' => 'Signed up successfully'
        ]);
    }

    public function login(Request $request)
    {
        if ($request->post()) {

            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // logged in
                return redirect('loginSuccess');
            }

            // error
            return back()->with('error', 'Email or Password is incorrect');
        }

        return view('home_login', [
            'title' => 'Login'
        ]);
    }

    public function loginSuccess()
    {
        return view('home_loginSuccess', [
            'title' => 'Logged in successfully'
        ]);
    }
}
