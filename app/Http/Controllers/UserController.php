<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function create()
    {
        return view('profile.create');
    }

    public function deleteProfile(User $user)
    {
        $user->delete();
        return redirect('/');
    }
}
