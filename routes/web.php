<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// home.blade.php
Route::view('home','home');

Route::view('index','admin/index');

Route::view('reg_form','reg_form');

Route::view('khata','khata');