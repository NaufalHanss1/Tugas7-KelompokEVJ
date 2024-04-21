<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\SendMail;

use App\Http\Controllers\deskripsiProdukController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\catagoryController;
use App\Http\Controllers\tipebarangController;
use App\Http\Controllers\BarangController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// route::get('/forgot-password', function () {
//     return view('forgetpassword');
// })->name('forgot.password');

Route::get('/login', [loginController::class, 'login']);
Route::get('/registration', [loginController::class, 'regist']);
Route::post('/regist-user', [loginController::class, 'RegisterUser'])->name('regist-user');
Route::post('/login-user', [loginController::class, 'LoginUser'])->name('login-user');
Route::get('/login-user', [loginController::class, 'LoginUser'])->name('login-user');
Route::get('/dashboard', [loginController::class, 'dashboard']); //nanti ganti buat masuk kedalam homepage
Route::get('deskripsi/{id}', [deskripsiProdukController::class, 'deskripsiProduk']);
Route::get('/', [ProfileController::class, 'profile']);//buat masuk ke dalem profile page
Route::post('/update/{id}', [ProfileController::class, 'update']);
Route::get('/dashboard', [ProfileController::class, 'dashboard']);
Route::get('/catagory', [catagoryController::class, 'index'])->name('catagory');

Route::get('/tipebarang/{catagori_id}', [tipebarangController::class, 'index'])->name('tipebarang');
Route::get('/pensil', [tipebarangController::class, 'pensil'])->name('pensil');

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/search', [BarangController::class, 'search'])->name('barang.search');
// Route::get('/barang/{id}', [BarangController::class, 'detail'])->name('barang.detail');