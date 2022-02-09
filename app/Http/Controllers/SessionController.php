<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function store(){
        $credentials = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back!');
        }
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(){
        Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
