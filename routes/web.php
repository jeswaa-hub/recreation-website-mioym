<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
// Landing Page
Route::get('/', function () { return view('landingPage');})->name('landing');
// About Us
Route::get('/the-firm/about-us', function () { return view('aboutUs');})->name('aboutUs');
// Team
Route::get('/the-firm/team', function () { return view('team');})->name('team');
// Investor
Route::get('/the-firm/investor', function () { return view('investor');})->name('investor');
// Single Family Residential
Route::get('/solutions/single-family-residential', function () { return view('singleFamilyResidential');})->name('singleFamilyResidential');
// Process
Route::get('/solutions/process', function () { return view('process');})->name('process');
// Commercial Property
Route::get('/solutions/commercial-property', function () { return view('commercialProperties');})->name('commercialProperties');
// Mioym Realty Partners
Route::get('/solutions/mioym-realty-partners', function () { return view('mioymRealtyPartners');})->name('mioymRealtyPartners');
// 

Route::get('/login', [LoginController::class, 'LoginView'])->name('login');
