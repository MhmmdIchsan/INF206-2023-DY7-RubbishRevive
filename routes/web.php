<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;



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

Route::group(['middleware' => 'prevent-back-history'], function () {
    // Route ini akan mengarahkan ke halaman utama
// url: yang akhiranya adalah / akan diarahkan ke halaman utama
    Route::get('/', [PagesController::class, 'halamanUtama']);


    // Route ini untuk mengarah ke halaman informasi jenis pengolahan sampah
    Route::get('/informasi-jenis-plastik', [PagesController::class, 'informasi']);
    Route::get('/informasi-jenis-kompos', [PagesController::class, 'informasi2']);
    Route::get('/informasi-jenis-kertas', [PagesController::class, 'informasi3']);
    Route::get('/informasi-jenis-anorganik', [PagesController::class, 'informasi3']);

    // Route ini akan mengarahkan ke halaman login
// url: yang akhiranya adalah /loginpage akan diarahkan ke halaman login
    Route::get('/login', [LoginController::class, 'index'])->name('login');



    // Route ini akan mengarahkan ke halaman register
// url: yang akhiranya adalah /registerPage akan diarahkan ke halaman register
    Route::get('/register', [RegisterController::class, 'index']);

    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/register', [RegisterController::class, 'store']);


    // Jika session login tidak ada maka akan diarahkan ke halaman login page dan jika ada maka akan diarahkan ke halaman dashboard
// Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');
// Route::get('/myprofile', [PagesController::class, 'myprofile'])->middleware('auth');
// Route::get('/ongoing', [PagesController::class, 'ongoing'])->middleware('auth');
// Route::get('/history', [PagesController::class, 'history'])->middleware('auth');

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');
    Route::get('/myprofile', [PagesController::class, 'myprofile'])->middleware('auth');
    Route::get('/ongoing', [PagesController::class, 'ongoing'])->middleware('auth');
    Route::get('/history', [PagesController::class, 'history'])->middleware('auth');
    Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth');
    Route::get('/pickup', [PagesController::class, 'pickup'])->middleware('auth');
    Route::get('/exchange', [PagesController::class, 'exchange'])->middleware('auth');
    Route::get('/tukar', [PagesController::class, 'tukar'])->middleware('auth');
    Route::get('/aboutus', [PagesController::class, 'aboutus'])->middleware('auth');
    Route::get('/pricelist', [PagesController::class, 'pricelist'])->middleware('auth');




    // Route ini akan mengarahkan ke halaman logout
// url: yang akhiranya adalah /logout akan diarahkan ke halaman logout
// jika user sudah logout maka akan diarahkan ke halaman login dan session akan berhenti

});