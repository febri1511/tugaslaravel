<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardFrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriProdukController;
use Illuminate\Support\Facades\Route;
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

//ini route untuk backend atau admin
Route::group(['middleware' => ['auth', 'peran:admin-manager-pelanggan']], function(){
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);

    Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);
    Route::post('/kategoriproduk/store', [KategoriProdukController::class, 'store']);
    Route::get('/kategoriproduk/delete/{id}', [KategoriProdukController::class, 'destroy']);
    Route::get('/kategoriproduk/create', [KategoriProdukController::class, 'create']);

    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
    Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);

    Route::get('/logout', [DashboardController::class, 'logout']);




});
});

Route::prefix('frontend')->group(function () {
    Route::get('/home', [DashboardFrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
