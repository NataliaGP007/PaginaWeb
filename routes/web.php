<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/congreso', function () {
    return view('congreso');
});

Route::get('/alumno', function () {
    return view('alumno');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);