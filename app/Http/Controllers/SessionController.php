<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created user in storage.
     */
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

        return redirect('/');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
