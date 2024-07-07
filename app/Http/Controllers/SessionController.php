<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = Request::validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials are not correct'
            ]);
        }

        Request::session()->regenerate();

        return redirect('/')->with('success', 'You are now logged in!');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }
}
