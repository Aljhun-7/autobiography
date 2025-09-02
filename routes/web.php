<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});

Route::get('/index', function() {
    return view('index');
});

Route::get('/biography', function() {
    return view('biography');
});

Route::get('/hipolito', function() {
    return view('hipolito');
});
