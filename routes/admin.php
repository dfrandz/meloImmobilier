<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/admin-home', [HomeController::class, "home"])->name('admin-home');