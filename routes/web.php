<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home');

Route::resource('jobs', JobController::class,
    ['only' => ['index']]
);

Route::view('/contact', 'contact');
