<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.main_1');
});

Route::get('/action-comics', function () {
    return view('components.main_2');
});
