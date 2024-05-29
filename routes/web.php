<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;



Route::view('/about', 'about')->name('about');

Route::get('/offers', [RoomController::class, 'offers'])->name('offers');

Route::get('/', [RoomController::class, 'roomIndex'])->name('index');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');

Route::get('/room_details/{room}', [RoomController::class, 'show'])->name('room_details');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/room', [BookingController::class, 'store'])->name('booking.store');

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', [OrderController::class, 'index'])->name('dashboard');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::patch('/order/edit/{order}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/order/{order}', [OrderController::class, 'destroy'])->name('order.destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';