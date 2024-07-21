<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');


Route::prefix('/dashboard')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  Route::get('/services', ServiceController::class)->name('services');
  Route::get('/projects', ProjectController::class)->name('projects');

  Route::resource('/clients', ClientController::class)->only(['index', 'show']);

  Route::get('/blogs', BlogController::class)->name('blogs');
  Route::resource('/contacts', ContactController::class)->only(['index']);

  Route::middleware(['auth'])->group(function () {
    Route::resource('/clients', ClientController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('/contacts', ContactController::class)->only(['create', 'store']);
  });
});

require __DIR__ . '/auth.php';
