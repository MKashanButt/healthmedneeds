<?php

use App\Http\Controllers\SquadMedicalSuppliesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/squad-medical-supplies', [SquadMedicalSuppliesController::class, 'store'])
    ->name('squad-medical-supplies.store');
