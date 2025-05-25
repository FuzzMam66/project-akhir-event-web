<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage.home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/regist', function () {
    return view('regist');
});

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/create', function () {
    return view('create');
});
