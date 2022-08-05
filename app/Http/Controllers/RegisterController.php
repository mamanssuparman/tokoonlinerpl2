<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function auth(Request $request)
    {
        $validasi = $request->validate([
            'name'      => 'required',
        ]);
        $isidata=[
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'alamat'    => $request->alamat,
            'password'  => bcrypt($request->password)
        ];
        User::create($isidata);
    }
}
