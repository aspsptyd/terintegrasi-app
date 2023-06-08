<?php

use App\Http\Controllers\BerandaAdministratorController;
use App\Http\Controllers\BerandaSiswaController;
use App\Http\Controllers\BerandaStaffController;
use App\Http\Controllers\BerandaWaliController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('administrator')->middleware(['auth', 'auth.administrator'])->group(function () {
    // Ini route khusus administrator
    Route::get('beranda', [BerandaAdministratorController::class, 'index'])->name('administrator.beranda');
});

Route::prefix('staff')->middleware(['auth', 'auth.staff'])->group(function () {
    // Ini route khusus staff
    Route::get('beranda', [BerandaStaffController::class, 'index'])->name('staff.beranda');
});

Route::prefix('siswa')->middleware(['auth', 'auth.siswa'])->group(function () {
    // Ini route khusus siswa
    Route::get('beranda', [BerandaSiswaController::class, 'index'])->name('siswa.beranda');
});

Route::prefix('wali')->middleware(['auth', 'auth.wali'])->group(function () {
    // Ini route khusus wali murid
    Route::get('beranda', [BerandaWaliController::class, 'index'])->name('wali.beranda');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('home');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
