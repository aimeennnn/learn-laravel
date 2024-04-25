<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Harus Diisi!!',
            'password.required' => 'Password Harus Diisi',
        ]);

        $validasilogin = [
            'email'=>$request -> email,
            'password'=>$request -> password
        ];

        if(Auth::attempt($validasilogin))
        {
            echo "Succes";exit();
        }else{
            return redirect('')->withErrors('Username Atau Password Yang Dimasukkan Tidak Sesusai!!')->withInput();
        }
    }
}
