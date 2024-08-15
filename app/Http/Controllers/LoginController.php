<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
    return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if (Auth::user()->role == 'admin' || Auth::user()->role == 'user') 
            {
                return redirect()->route('Invoices.index');
            } 
        }

        return redirect()->back()->withErrors([
            'email' => 'Incorrect Email or Password',
        ]);
    }

}
