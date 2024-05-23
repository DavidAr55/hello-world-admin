<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('panel');
});

Route::get('/content', function () {
    return view('contenido');
});

Route::get('/exercises', function () {
    return view('ejercicios');
});

Route::get('/create-admin', function () {
    return view('agregar-admin');
});

Route::get('/server-usage', function () {
    return view('recursos-servidor');
});

Route::get('/logs', function () {
    return view('registros');
});