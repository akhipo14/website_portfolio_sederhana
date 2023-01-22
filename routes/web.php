<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilDashboardController;
use App\Http\Controllers\JenisDashboardController;
use App\Http\Controllers\BlogDashboardController;
use App\Http\Controllers\KaryaDashboardController;
use App\Http\Controllers\KategoriDashboardController;
use App\Http\Controllers\PesanDashboardController;
use App\Http\Controllers\DeskripsiDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\PesanController;
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



Route::get('/dashboard',function(){
    return view('dashboards.index');
  })->middleware('auth');
Route::get('login',[loginController::class,'login']);
Route::post('/login',[loginController::class,'authenticate'])->middleware('guest')->name('login');
Route::post('/logout',[loginController::class,'logout']);
Route::resource('/', HomeController::class);
Route::resource('profil', ProfilController::class);
Route::resource('blog', BlogController::class);
Route::resource('karya', KaryaController::class);
Route::resource('pesan', pesanController::class);
Route::resource('profil-dashboard',ProfilDashboardController::class)->middleware('auth');
Route::resource('blog-dashboard',BlogDashboardController::class)->middleware('auth');
Route::resource('jenis-dashboard',JenisDashboardController::class)->middleware('auth');
Route::resource('karya-dashboard',KaryaDashboardController::class)->middleware('auth');
Route::resource('kategori-dashboard',KategoriDashboardController::class)->middleware('auth');
Route::resource('deskripsi-dashboard',DeskripsiDashboardController::class)->middleware('auth');
Route::resource('pesan-dashboard',PesanDashboardController::class)->middleware('auth');
