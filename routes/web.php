<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

// Redirect the homepage to the patient list
Route::get('/', function () {
    return redirect()->route('patients.index');
});

// This single line creates all 7 CRUD routes (index, create, store, show, edit, update, destroy)
Route::resource('patients', PatientController::class);