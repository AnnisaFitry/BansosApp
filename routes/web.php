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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('admin/home', [HomeController::class, 'adminIndex'])->name('admin.index')->middleware('is_admin');

Route::get('/index', [BansosController::class, 'index'])->name('index');
Route::get('/login', [BansosController::class, 'login'])->name('login');
Route::get('/register', [BansosController::class, 'register'])->name('register');
Route::get('/pengajuan', [BansosController::class, 'pengajuan'])->name('pengajuan');
Route::get('/profile', [BansosController::class, 'profile'])->name('profile');
