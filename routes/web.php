<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomLevelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

// Routes for Room Levels
Route::resource('room-levels', RoomLevelController::class);

// Routes for Rooms
Route::resource('rooms', RoomController::class);

// Routes for Patients
Route::resource('patients', PatientController::class);

// Routes for Reservations
Route::resource('reservations', ReservationController::class);