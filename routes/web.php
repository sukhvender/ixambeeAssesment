<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Registration routes
Route::get('/register', 'App\Http\Controllers\AuthController@showRegistrationForm');
Route::post('/register', 'App\Http\Controllers\AuthController@register');

// Login routes
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
