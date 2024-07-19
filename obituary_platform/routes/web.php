<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObituaryController;

Route::get('/', [HomeController::class, 'index']);
Route::resource('obituaries', ObituaryController::class);
