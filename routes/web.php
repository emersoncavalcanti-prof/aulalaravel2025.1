<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/login', function () {
    return view('login');
});

