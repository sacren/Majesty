<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home');

Route::resource('jobs', JobController::class,
    ['except' => ['edit', 'update']]
);

Route::view('/contact', 'contact');
