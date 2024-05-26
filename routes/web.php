<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('');

//* AUTH
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', function () {
});

//* HOME
Route::get('/home', HomeController::class)->name('home.index');

//* SERVICES
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

//* PROJECTS
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

//* CLIENTS
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

//* BLOGS
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'view'])->name('blogs.view');

//* CONTACT
Route::get('/contact', ContactController::class)->name('contact.index');
