<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/exercises', function () {
    return view('exercises');
});

Route::get('/create-admin', function () {
    return view('create-admin');
});

Route::get('/admin-server', function () {
    return view('admin-server');
});

Route::get('/logs', function () {
    return view('logs');
});