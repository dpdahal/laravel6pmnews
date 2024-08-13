<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $data['email'];
        $password = $data['password'];
        if (auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Invalid login details');
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
