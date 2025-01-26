<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TourListController;
use App\Http\Controllers\ToursDetailsController;

// -----------------------------------------------View Page Users------------------------------------------------------------
// Home Controller
Route::get('/', [HomeController::class, 'index'])->name('home');
// ContactsController
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// destinationcontroller
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');

//BlogController
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
//BlogDetailController
Route::get('/blog-detail', [BlogDetailsController::class, 'index'])->name('blog-detail');

//TourListController
Route::get('/tour-list', [TourListController::class, 'index'])->name('tour-list');

//ToursDetailsController
Route::get('/tours-details', [ToursDetailsController::class, 'index'])->name('tours-details');

//authenticationController 
//Sing In
Route::post('/login', [AuthController::class, 'login'])->name('login');
//authent SignUp
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
