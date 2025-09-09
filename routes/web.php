<?php

use App\Http\Controllers\EarlyAccessController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/early-access', [EarlyAccessController::class, 'store'])->name('early-access.store');
