<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/rooms_details/{room}', [RoomController::class, 'show']);

Route::get('/contact', [ContactController::class, 'create']);