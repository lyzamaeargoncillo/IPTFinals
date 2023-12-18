<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CarController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{user}', [UserController::class, 'edit'])->name('users.edit');
// Route::post('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/delete/{user}', [UserController::class, 'delete'])->name('users.destroy');
// Route::post('/users', 'UserController@store')->name('users.store');


// Routes sa Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');


// Routes sa Rentals
Route::resource('rental', 'RentalController');
Route::get('/rental', [RentalController::class, 'index'])->name('rental.index');
Route::get('/rental/create', [RentalController::class, 'create'])->name('rental.create');
Route::post('/rental', [RentalController::class, 'store'])->name('rental.store');
// Route::get('/rental/{id}', [RentalController::class, 'show'])->name('rental.show');
Route::get('/rental/{rental}/edit', [RentalController::class, 'edit'])->name('rental.edit');
Route::patch('/rental/{rental}', [RentalController::class, 'update'])->name('rental.update');
Route::delete('/rental/{rental}', [RentalController::class, 'destroy'])->name('rental.destroy');
// Route::get('/rentals', [RentalController::class, 'index'])->name('rental.index');



// Route::post('/users', [UserController::class, 'store']);

// Routes sa car
Route::get('/cars', 'CarController@index');
Route::get('/car', [CarController::class, 'index'])->name('car.index');
Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
Route::post('/car/create', [CarController::class, 'store'])->name('car.store');
Route::get('/car/{car}', [CarController::class, 'edit'])->name('car.edit');
Route::post('/car/{car}', [CarController::class, 'update'])->name('car.update');
Route::delete('/car/delete/{car}', [CarController::class, 'destroy'])->name('car.destroy');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('car.show');
Route::get('/car/{id}', 'CarController@showCar');
