<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clientes', function () { 
    return view('clientes');
})->name('clientes');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/alunos', function () {
    return view('alunos');
})->name('alunos')->middleware('auth');

Route::fallback(function(){
    return redirect()->route('login');
});