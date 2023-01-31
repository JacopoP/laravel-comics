<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.main_1');
});

Route::get('/prodotto', function () {
    return view('components.main_2');
});
