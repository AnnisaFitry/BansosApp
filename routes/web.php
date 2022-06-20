<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\HomeController;
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

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');
Route::get('admin/user', [HomeController::class, 'userAdmin'])->name('userAdmin')->middleware('is_admin');
Route::get('admin/laporan', [HomeController::class, 'laporanBansos'])->name('laporanBansos')->middleware('is_admin');
Route::get('admin/detail', [HomeController::class, 'detailData'])->name('detailData')->middleware('is_admin');

Route::get('/home', [BansosController::class, 'index'])->name('dashboard');
Route::get('/register', [BansosController::class, 'register'])->name('register');
Route::get('/pengajuan', [BansosController::class, 'pengajuan'])->name('pengajuan');
Route::get('/profile', [BansosController::class, 'profile'])->name('profile');
Route::get('/index-admin', [BansosController::class, 'indexadmin'])->name('indexadmin');
Route::get('/cetak-bansos', [BansosController::class, 'cetakbansos'])->name('cetakbansos');

// Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
// Route::get('/login', [BansosController::class, 'login'])->name('login');
// Route::get('/user-admin', [BansosController::class, 'useradmin'])->name('useradmin');
// Route::get('/laporan-bansos', [BansosController::class, 'laporanbansos'])->name('laporanbansos');
// Route::get('/detail-data', [BansosController::class, 'detaildata'])->name('detaildata');