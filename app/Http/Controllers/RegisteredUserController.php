<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a new user in storage.
     */
    public function store()
    {
        $attributes = Request::validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}
