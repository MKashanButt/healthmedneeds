<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::view("/", "index");

Route::post('/form', [FormController::class, 'store'])
    ->name('form.store');
