<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('products', [PokemonController::class, 'index']);
Route::get('products/create', [PokemonController::class, 'create']);
Route::post('products', [PokemonController::class, 'store']);
Route::get('products/{id}/edit', [PokemonController::class, 'edit']);
Route::put('products/{id}', [PokemonController::class, 'update']);
Route::delete('products/{id}', [PokemonController::class, 'destroy']);

Route::get('products', [CoachController::class, 'index']);
Route::get('products/create', [CoachController::class, 'create']);
Route::post('products', [CoachController::class, 'store']);
Route::get('products/{id}/edit', [CoachController::class, 'edit']);
Route::put('products/{id}', [CoachController::class, 'update']);
Route::delete('products/{id}', [CoachController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
