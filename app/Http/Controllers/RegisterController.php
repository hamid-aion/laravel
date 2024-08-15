<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function index()
    {
     return view('register');

    }
    public function create(Request $request)
    {
       $errors=$request->validate([
        'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
        'email'=>'required|email',
        'password'=>'required',
        'role'=>'required'
       ],
    [
        'name.required'=>'The name field is required',
        'email.required'=> 'The email field is required',
        'password.required' => 'The password field is required',
        'role.required' => 'The role field is required'
    ]);
    User::create($errors);
    return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
