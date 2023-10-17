<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\MunicipalityController;

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

Route::get('/Registro de Alumno', function () {
    return view('registroAlumno');
});

Route::get('/alumnos', function () {
    return view('alumnos');
});

Route::get('/registroAlumno', [StudentController::class, 'index']);
Route::post('/registroAlumno', [StudentController::class, 'store']);

Route::resource('states', StateController::class);
Route::resource('municipalities', MunicipalityController::class);
Route::resource('localities', LocalityController::class);
Route::resource('roles', RoleController::class);
Route::resource('careers', CareerController::class);
Route::resource('students', StudentController::class);
