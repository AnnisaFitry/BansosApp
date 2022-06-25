<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateUsers;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['is_admin'])->group(function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('adminHome');
    Route::get('admin/user', [HomeController::class, 'userAdmin'])->name('userAdmin');
    Route::get('admin/laporan', [HomeController::class, 'laporanBansos'])->name('laporanBansos');
    Route::get('admin/detail', [HomeController::class, 'detailData'])->name('detailData');
});

Route::middleware(['is_user'])->group(function () {
    Route::get('user/home', [UsersController::class, 'index'])->name('userHome');
    Route::resource('pengajuan', PengajuanController::class);
    Route::resource('profile', ProfileController::class);
});

Route::resource('updateJenisBansos', UpdateUsers::class);

Route::get('/home', [BansosController::class, 'index'])->name('dashboard');
Route::get('/pengajuanGuest', [BansosController::class, 'pengajuan'])->name('pengajuanGuest');
Route::get('/profileGuest', [BansosController::class, 'profile'])->name('profileGuest');
