<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
            'phone' => ['required', 'numeric'],
            'gender' => ['required'],
            'present_address' => ['required'],
            'permanent_address' => ['required'],
            'company' => ['required'],
            'position' => ['required'],
        ]);


    }

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

    }
}
