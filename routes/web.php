<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy', [App\Http\Controllers\PageController::class, 'privacy'])->name('privacy');

Route::get('/about', [App\Http\Controllers\PageController::class, 'index'])->name('about');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{days}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients');
Route::get('/clients/create', [App\Http\Controllers\ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [App\Http\Controllers\ClientController::class, 'store']);

Route::delete('/clients/{id}', [App\Http\Controllers\ClientController::class, 'destroy']);
Route::get('/clients/{id}/edit', [App\Http\Controllers\ClientController::class, 'edit']);
Route::put('/clients/{id}', [App\Http\Controllers\ClientController::class, 'update']);

Route::resource('cars', CarController::class);

Route::get('/cars/index-client/{id}', [CarController::class, 'indexClient']);

Route::resource('users', App\Http\Controllers\UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/appointments/create/{client_id}', [App\Http\Controllers\AppointmentController::class, 'create']);
Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
