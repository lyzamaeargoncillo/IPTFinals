<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes for Customers
Route::get('/customers', [CustomerController::class, 'index'])->name('customer');
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);
Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);

// Routes for Rentals
Route::apiResource('rentals', RentalController::class);
// Additional routes if needed
// Route::get('/rentals', [RentalController::class, 'index'])->name('rental.index');
// Route::get('/rentals/{id}', [RentalController::class, 'show'])->name('rental.show');

// Routes for Cars
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'create'])->name('car');
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/{car}', [CarController::class, 'edit']);
Route::put('/cars/{car}', [CarController::class, 'update']);
Route::delete('/cars/{car}', [CarController::class, 'destroy']);
Route::get('/cars/{car}', [CarController::class, 'show']);
