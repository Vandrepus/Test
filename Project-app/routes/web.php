<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Auth\RegisteredUserController; // For the registration page
use App\Http\Controllers\Auth\AuthenticatedSessionController; // For the login page

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us Page
Route::get('/about', [AboutUsController::class, 'index'])->name('about');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

//Registration and log in pages
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');
                
Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
