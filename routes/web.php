<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/logs/index', [LogController::class, 'index'])->name('logs.index');

    Route::get('/logs/cigarette', [LogController::class, 'showCigaretteLogForm'])->name('logs.cigarette');
    Route::post('/logs/cigarette', [LogController::class, 'storeCigaretteLog']);

    Route::get('/logs/exercise', [LogController::class, 'showExerciseLogForm'])->name('logs.exercise');
    Route::post('/logs/exercise', [LogController::class, 'storeExerciseLog']);

    Route::get('/logs/stress', [LogController::class, 'showStressLogForm'])->name('logs.stress');
    Route::post('/logs/stress', [LogController::class, 'storeStressLog']);

    Route::get('/logs/smoke-free', [LogController::class, 'showSmokeFreeLogForm'])->name('logs.smoke-free');
    Route::post('/logs/smoke-free', [LogController::class, 'storeSmokeFreeLog']);
});


require __DIR__.'/auth.php';
