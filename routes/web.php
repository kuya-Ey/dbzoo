<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PetBoardingController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\GroomingServiceController;


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
Route::get('/consultations', [ConsultationController::class, 'index']);
Route::get('/consultation/{id}', [ConsultationController::class, 'show']);
Route::get('/consultation/', [ConsultationController::class, 'create']);
Route::get('/consultation/{id}/edit', [ConsultationController::class, 'edit']);

Route::post('/consultation', [ConsultationController::class, 'store']);
Route::put('/consultation/{id}/edit', [ConsultationController::class, 'update']);
Route::delete('/consultation/{id}', [ConsultationController::class, 'destroy']);

// routes for grooming_services table
Route::get('/grooming_services', [GroomingServiceController::class, 'index']);
Route::get('/grooming_service/{id}', [GroomingServiceController::class, 'show']);
Route::get('/grooming_service/', [GroomingServiceController::class, 'create']);
Route::get('/grooming_service/{id}/edit', [GroomingServiceController::class, 'edit']);

Route::post('/grooming_service', [GroomingServiceController::class, 'store']);
Route::put('/grooming_service/{id}/edit', [GroomingServiceController::class, 'update']);
Route::delete('/grooming_service/{id}', [GroomingServiceController::class, 'destroy']);

// routes for pet_boardings table
Route::get('/pet_boardings', [PetBoardingController::class, 'index']);
Route::get('/pet_boarding/{id}', [PetBoardingController::class, 'show']);
Route::get('/pet_boarding/', [PetBoardingController::class, 'create']);
Route::get('/pet_boarding/{id}/edit', [PetBoardingController::class, 'edit']);

Route::post('/pet_boarding', [PetBoardingController::class, 'store']);
Route::put('/pet_boarding/{id}/edit', [PetBoardingController::class, 'update']);
Route::delete('/pet_boarding/{id}', [PetBoardingController::class, 'destroy']);

// routes for products table
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/', [ProductController::class, 'create']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{id}/edit', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);



