<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, "home"])->name('home');
Route::get('location', [HomeController::class, "location"])->name('location');
Route::get('/vente', [HomeController::class, "vente"])->name('vente');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/detail-piece', [HomeController::class, 'detailPiece'])->name('detail-piece');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
require_once "admin.php";