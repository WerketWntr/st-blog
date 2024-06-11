<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthUserController extends Controller
{
    // Registration
    public function RegistrationPage()
    {
        return view('auth.registration');
    }

    public function Registration(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8|max:25',
        ]);

        $user = User::create($attributes);
        Auth::login($user);

        return redirect('/posts');
    }

    // Login
    public function LoginPage()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:25',
        ]);

        if (! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, login and password do not match'
            ]);
        };
        request()->session()->regenerate();

        return redirect('/posts');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('/');
    }


}

