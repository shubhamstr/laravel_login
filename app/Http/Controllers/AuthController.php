<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login_view()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
    }
    public function register_view()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // dd($request->all());
       return $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        Users::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password),
        ]);

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }else{
            return 'test';
        }

        return redirect('register')->withError('Error');
    }
    public function home_view()
    {
        return view('home');
    }
    public function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect('app');
    }
}
