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
// The Investor Portal is SubDomain nila

// Single Family Residential
Route::get('/solutions/single-family-residential', function () { return view('singleFamilyResidential');})->name('singleFamilyResidential');
// Process
Route::get('/solutions/process', function () { return view('process');})->name('process');
// Commercial Property
Route::get('/solutions/commercial-property', function () { return view('commercialProperties');})->name('commercialProperties');
// Deal Finder SubDomain nila
// Mioym Realty Partners
Route::get('/solutions/mioym-realty-partners', function () { return view('mioymRealtyPartners');})->name('mioymRealtyPartners');

// Affordable Home Program  
Route::get('/asset-management/affordable-home-program', function () { return view('affordableHomeProgram');})->name('affordableHomeProgram');
// Strategic Property preservation
Route::get('/asset-management/strategic-property-preservation', function () { return view('strategicPropertyPreservation');})->name('strategicPropertyPreservation');
// National Foreclosure Prevention
Route::get('/asset-management/national-foreclosure-prevention', function () { return view('nationalForeclosurePrevention');})->name('nationalForeclosurePrevention');
// Cash For Homes ay SubDomain nila

// Lending Page naman is SubDomain din nila

// News (Blogs and Testimonials)
Route::get('/news/blogs', function () { return view('blogs');})->name('blogs');
Route::get('/news/testimonials', function () { return view('testimonials');})->name('testimonials');
// Login
Route::get('/login', [LoginController::class, 'LoginView'])->name('login');
