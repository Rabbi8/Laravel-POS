<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\VerifyLoginRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('login.form');
    }

    public function verify(VerifyLoginRequest $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::guard('admins')->attempt($data)) {
            $request->session()->regenerateToken();
            return redirect()->intended('dashboard');
        }else{
            return redirect()->to('login')->with(['fail' => 'Login Information wrong. Please try again']);
        }
    }

    public function logout(){
        Auth::guard('admins')->logout();
        return redirect()->route('login');
    }

}
