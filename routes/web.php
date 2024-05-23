<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;



Route::get('/about', 'about')->name('about');

Route::get('/offers', 'offers')->name('offers');

Route::get('/', [RoomController::class, 'roomIndex'])->name('index');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');

Route::get('/rooms_details/{room}', [RoomController::class, 'show'])->name('rooms_details');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');