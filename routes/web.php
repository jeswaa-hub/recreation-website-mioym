<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
// Landing Page
Route::get('/', function () { return view('landingPage');})->name('landing');
// About Us
Route::get('/about-us', function () { return view('aboutUs');})->name('aboutUs');
// Team
Route::get('/team', function () { return view('team');})->name('team');
// Investor
Route::get('/investor', function () { return view('investor');})->name('investor');

Route::get('/login', [LoginController::class, 'LoginView'])->name('login');
