<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials are not correct'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/')->with('success', 'You are now logged in!');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }
}
