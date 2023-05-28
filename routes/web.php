<?php

use App\Http\Controllers\FormController;
use App\Https\Controllers\InputController;
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

Route::get('/tugas8', function () {
    return view('tugas8');
});

Route::post('/tugas8', function () {
    return view('tugas8');
});


Route::get('/tugas9', function () {
    return view('tugas9');
});

Route::post('/tugas9', function () {
    return view('tugas9');
});


Route::get('/tugas9', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);


Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);