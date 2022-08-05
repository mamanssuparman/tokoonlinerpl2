<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
       return view('welcome');
    }
    public function login(Request $request)
    {
        $cek_data=[
            'email'     => $request->username,
            'password'  => $request->password
        ];
        if(Auth::attempt($cek_data)){
            return redirect()->intended('/dashboard');
        }else{
            echo "login gagal";
        }
    }
}
