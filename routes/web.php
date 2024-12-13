<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // If you are using a controller

Route::get('/', [HomeController::class, 'index'])->name('home'); // With a controller
//OR
Route::get('/', function () {
    return view('home');
}); // Without a controller (simpler for just a landing page)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
