<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::resource('/types', TypeController::class);

