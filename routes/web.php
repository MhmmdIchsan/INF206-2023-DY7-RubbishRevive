<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TukarPoinController;




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


    Route::get('/redirects', [PagesController::class, 'index']);


    // Route ini untuk mengarah ke halaman informasi jenis pengolahan sampah
    Route::get('/informasi-jenis-plastik', [PagesController::class, 'informasi']);
    Route::get('/informasi-jenis-kompos', [PagesController::class, 'informasi2']);
    Route::get('/informasi-jenis-kertas', [PagesController::class, 'informasi3']);
    Route::get('/informasi-jenis-anorganik', [PagesController::class, 'informasi4']);

    // Route ini akan mengarahkan ke halaman login
// url: yang akhiranya adalah /loginpage akan diarahkan ke halaman login
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    // Pickup Start Here
    Route::resource('/pickup', PickupController::class);
    Route::resource('/ongoing', PickupController::class);
    Route::get('pickup', [PickupController::class, 'index'])->name('pickup.index');
    Route::get('ongoing', [PickupController::class, 'ongoing'])->name('pickup.ongoing');
    Route::get('price', [PickupController::class, 'getPrice'])->name('pickup.getPrice');
    Route::get('pickup.history', [PickupController::class, 'history'])->name('pickup.history');
    
    // make route for change status

    // Pickup End Here

    // Route ini akan mengarahkan ke halaman register
// url: yang akhiranya adalah /registerPage akan diarahkan ke halaman register
    Route::get('/register', [RegisterController::class, 'index']);

    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');
    Route::get('/myprofile', [PagesController::class, 'myprofile'])->middleware('auth');
    Route::get('/history', [PagesController::class, 'history'])->middleware('auth');
    Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth');
    Route::get('/exchange', [PagesController::class, 'exchange'])->middleware('auth');

    // Penukaran Start Here
    Route::resource('/tukarpoin', TukarPoinController::class)->middleware('auth');
    Route::get('/tukarPoin', [TukarPoinController::class, 'create'])->middleware('auth');
    // Penukaran End Here


    Route::get('/aboutus', [PagesController::class, 'aboutus'])->middleware('auth');
    Route::get('/pricelist', [PagesController::class, 'pricelist'])->middleware('auth');
    Route::get('/jadwal-pickup', [PagesController::class, 'jadwalPickup'])->middleware('auth');

    // Admin
    Route::resource('/manageusers', UserController::class);
    // Admin End here
});