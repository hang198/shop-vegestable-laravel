<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function showLogout() {
        return view('page.logout');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('index');
    }
}
