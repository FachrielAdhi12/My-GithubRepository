<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Dashboard User)
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Halaman About Me Baru
Route::get('/about', function () {
    return view('about');
})->name('about');

// Panel Admin
Route::get('/admin', [PortfolioController::class, 'admin'])->name('admin.index');
Route::post('/admin/sync', [PortfolioController::class, 'syncGithub'])->name('admin.sync');