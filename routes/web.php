<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisCuciController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/trackyourshoes', function () {
    return view('main');
});
Route::get('/login', function () {
    return view('main');
});
Route::get('/footer', function () {
    return view('main');
});

Route::prefix('dashboard')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::resource('', DashboardController::class);
        Route::resource('pelanggan', PelangganController::class);
        Route::resource('pemesanan', PemesananController::class);
        Route::resource('jenis-cuci', JenisCuciController::class);
    });
