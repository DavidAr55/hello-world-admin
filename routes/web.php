<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/panel');

Route::get('/panel', function () {
    return view('dashboard');
});

Route::get('/contenido', function () {
    return view('content');
});

Route::get('/ejercicios', function () {
    return view('exercises');
});

Route::get('/agregar-admin', function () {
    return view('add-admin');
});

Route::get('/recursos-servidor', function () {
    return view('server-usage');
});

Route::get('/registros', function () {
    return view('logs');
});