<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'pageView']);