<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/components', function () {
    return view('components.flyonui-components');
})->name('components');
