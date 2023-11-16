<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PetBoardingController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\GroomingServiceController;
use App\Http\Controllers\Auth\RegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


// routes for consultations table
Route::get('/consultations', [ConsultationController::class, 'index'])->middleware('verified');
Route::get('/consultation/{id}', [ConsultationController::class, 'show'])->middleware('verified');
Route::get('/consultation/', [ConsultationController::class, 'create'])->middleware('verified');
Route::get('/consultation/{id}/edit', [ConsultationController::class, 'edit'])->middleware('verified');

Route::post('/consultation', [ConsultationController::class, 'store'])->middleware('verified');
Route::put('/consultation/{id}/edit', [ConsultationController::class, 'update'])->middleware('verified');
Route::delete('/consultation/{id}', [ConsultationController::class, 'destroy'])->middleware('verified');

// routes for grooming_services table
Route::get('/grooming_services', [GroomingServiceController::class, 'index'])->middleware('verified');
Route::get('/grooming_service/{id}', [GroomingServiceController::class, 'show'])->middleware('verified');
Route::get('/grooming_service/', [GroomingServiceController::class, 'create'])->middleware('verified');
Route::get('/grooming_service/{id}/edit', [GroomingServiceController::class, 'edit'])->middleware('verified');

Route::post('/grooming_service', [GroomingServiceController::class, 'store'])->middleware('verified');
Route::put('/grooming_service/{id}/edit', [GroomingServiceController::class, 'update'])->middleware('verified');
Route::delete('/grooming_service/{id}', [GroomingServiceController::class, 'destroy'])->middleware('verified');

// routes for pet_boardings table
Route::get('/pet_boardings', [PetBoardingController::class, 'index'])->middleware('verified');
Route::get('/pet_boarding/{id}', [PetBoardingController::class, 'show'])->middleware('verified');
Route::get('/pet_boarding/', [PetBoardingController::class, 'create'])->middleware('verified');
Route::get('/pet_boarding/{id}/edit', [PetBoardingController::class, 'edit'])->middleware('verified');

Route::post('/pet_boarding', [PetBoardingController::class, 'store'])->middleware('verified');
Route::put('/pet_boarding/{id}/edit', [PetBoardingController::class, 'update'])->middleware('verified');
Route::delete('/pet_boarding/{id}', [PetBoardingController::class, 'destroy'])->middleware('verified');

// routes for products table
Route::get('/products', [ProductController::class, 'index'])->middleware('verified');
Route::get('/product/{id}', [ProductController::class, 'show'])->middleware('verified');
Route::get('/product/', [ProductController::class, 'create'])->middleware('verified');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->middleware('verified');

Route::post('/product', [ProductController::class, 'store'])->middleware('verified');
Route::put('/product/{id}/edit', [ProductController::class, 'update'])->middleware('verified');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->middleware('verified');


// registration  for roles
Route::get('/select-a-role', [RegisterController::class, 'select_a_role']);

Route::get('/register/{id}', [RegisterController::class, 'register_role']);
