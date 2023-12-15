<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterviewsController;
use App\Http\Controllers\NameTaxController;
use App\Http\Controllers\TaxRegisterController;
use App\Http\Controllers\TaskDirectorController;
use App\Http\Controllers\TaxInformationController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::prefix('Interviews')->group(function () {
    Route::get('/', [InterviewsController::class, 'index']);
    Route::post('/', [InterviewsController::class, 'store']);
    Route::put('/', [InterviewsController::class, 'update']);
    Route::delete('/', [InterviewsController::class, 'destroy']);
});

Route::prefix('NameTax')->group(function () {
    Route::get('/', [NameTaxController::class, 'index']);
    Route::post('/', [NameTaxController::class, 'store']);
    Route::put('/', [NameTaxController::class, 'update']);
    Route::delete('/', [NameTaxController::class, 'destroy']);
});

Route::prefix('TaskDirector')->group(function () {
    Route::get('/', [TaskDirectorController::class, 'index']);
    Route::post('/', [TaskDirectorController::class, 'store']);
    Route::put('/', [TaskDirectorController::class, 'update']);
    Route::delete('/', [TaskDirectorController::class, 'destroy']);
});

Route::prefix('TaxInformation')->group(function () {
    Route::get('/', [TaxInformationController::class, 'index']);
    Route::post('/', [TaxInformationController::class, 'store']);
    Route::put('/', [TaxInformationController::class, 'update']);
    Route::delete('/', [TaxInformationController::class, 'destroy']);
});

Route::prefix('TaxRegister')->group(function () {
    Route::get('/', [TaxRegisterController::class, 'index']);
    Route::post('/', [TaxRegisterController::class, 'store']);
    Route::put('/', [TaxRegisterController::class, 'update']);
    Route::delete('/', [TaxRegisterController::class, 'destroy']);
});