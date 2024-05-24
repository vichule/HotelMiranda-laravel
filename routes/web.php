<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;



Route::view('/about', 'about')->name('about');

Route::get('/offers', [RoomController::class, 'offers'])->name('offers');

Route::get('/', [RoomController::class, 'roomIndex'])->name('index');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');

Route::get('/room_details/{room}', [RoomController::class, 'show'])->name('room_details');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');