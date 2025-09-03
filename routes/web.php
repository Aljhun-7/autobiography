<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});

Route::get('/biography', function() {
    return view('biography');
});

Route::get('/angala', function() {
    return view('angala');
});

Route::get('/hipolito', function() {
    return view('hipolito');
});

Route::get('/wong', function() {
    return view('wong');
});

Route::get('/marzan', function() {
    return view('marzan');
});

