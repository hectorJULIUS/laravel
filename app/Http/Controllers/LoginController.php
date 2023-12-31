<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}