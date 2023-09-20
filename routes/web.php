<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy', [App\Http\Controllers\PageController::class, 'privacy'])->name('privacy');

Route::get('/about', [App\Http\Controllers\PageController::class, 'index'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients');
Route::get('/clients/create', [App\Http\Controllers\ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [App\Http\Controllers\ClientController::class, 'store']);

