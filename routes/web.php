<?php

use App\Http\Controllers\Shark;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sharks', Shark::class);
