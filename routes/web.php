<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SignupController;

// Signup Routes
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup.show');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.store');

// Login Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');


use App\Http\Controllers\RepairRequestController;

Route::get('/repair/business', function () {
    return view('business-repair');
})->name('repair.businessForm');

Route::get('/repair/individual', function () {
    return view('individual-repair');
})->name('repair.individualForm');

Route::post('/repair/store', [RepairRequestController::class, 'store'])->name('repair.store');
