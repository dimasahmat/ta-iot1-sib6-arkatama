<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/register', function () {
    return view('layouts.register');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/coba', function () {
    return view('pages.coba');
})->middleware(['auth', 'verified']);

Route::get('/dimasahmat', function () {
    return view('pages.dimasahmat');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
