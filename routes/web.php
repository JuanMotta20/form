<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::middleware('role:administrador')->group(function () {
        Route::view('/admin', 'roles.admin')->name('admin.dashboard');
    });

    Route::middleware('role:lider')->group(function () {
        Route::view('/lider', 'roles.lider')->name('lider.dashboard');
    });

    Route::middleware('role:aprendiz')->group(function () {
        Route::view('/aprendiz', 'roles.aprendiz')->name('aprendiz.dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
