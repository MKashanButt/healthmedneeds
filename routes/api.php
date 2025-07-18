<?php

use App\Http\Controllers\ReshapeMedicalEquipmentController;
use App\Http\Controllers\SquadMedicalSuppliesController;
use App\Http\Controllers\S8MedicalEquipmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/squad-medical-supplies', [SquadMedicalSuppliesController::class, 'store'])
    ->name('squad-medical-supplies.store');

Route::post('/reshape-medical-equipments', [ReshapeMedicalEquipmentController::class, 'store'])
    ->name('reshape-medical-equipments.store');

Route::post('/s8-medical-equipment', [S8MedicalEquipmentController::class, 'store'])
    ->name('s8-medical-equipment.store');
