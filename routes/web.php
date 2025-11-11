<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;

Route::get('/', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/hospitals', [HospitalController::class, 'index']);
    Route::get('/hospitals/create', [HospitalController::class, 'create']);
    Route::post('/hospitals', [HospitalController::class, 'store']);
    Route::get('/hospitals/{id}/edit', [HospitalController::class, 'edit']);
    Route::post('/hospitals/{id}', [HospitalController::class, 'update']);
    Route::delete('/hospitals', [HospitalController::class, 'destroy']);

    Route::get('/patients', [PatientController::class, 'index']);
    Route::get('/patients/create', [PatientController::class, 'create']);
    Route::post('/patients', [PatientController::class, 'store']);
    Route::get('/patients/{id}/edit', [PatientController::class, 'edit']);
    Route::post('/patients/{id}', [PatientController::class, 'update']);
    Route::delete('/patients', [PatientController::class, 'destroy']);
});
