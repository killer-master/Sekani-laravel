<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'welcome'])->name('home.page');
Route::get('/contact', [PageController::class, 'contact'])->name('contact.page');
Route::get('/eatry', [PageController::class, 'eatry'])->name('eatry.page');
Route::get('/game', [PageController::class, 'game'])->name('game.page');
Route::get('/fitness', [PageController::class, 'fitness'])->name('fitness.page');
Route::get('/pastry', [PageController::class, 'pastry'])->name('pastry.page');
Route::get('/planning', [PageController::class, 'planning'])->name('planning.page');
Route::get('/pool', [PageController::class, 'pool'])->name('pool.page');
Route::get('/rooftop', [PageController::class, 'rooftop'])->name('rooftop.page');
Route::get('/saloon', [PageController::class, 'saloon'])->name('saloon.page');
Route::get('/vip', [PageController::class, 'vip'])->name('vip.page');