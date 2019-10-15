<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin() {
        return view('page.login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('index');
        }
    }

}
