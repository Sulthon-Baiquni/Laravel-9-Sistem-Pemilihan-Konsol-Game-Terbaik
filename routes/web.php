<?php

use App\Http\Controllers\KonsolController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
})->name('/');
Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/konsol', [KonsolController::class, 'index'])->name('konsol')->middleware('auth');
Route::get('/create', [KonsolController::class, 'create'])->name('create')->middleware('auth');
Route::post('/store', [KonsolController::class, 'store'])->name('store')->middleware('auth');
Route::get('/edit/{id}', [KonsolController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/update/{id}', [KonsolController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/delete/{id}', [KonsolController::class, 'destroy'])->name('delete')->middleware('auth');
Route::match(['get', 'post'], '/spk', [KonsolController::class, 'spk'])->name('spk');
Route::get('/riwayat', [KonsolController::class, 'riwayat'])->name('riwayat')->middleware('auth');