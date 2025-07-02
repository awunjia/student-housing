<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PropertyController;


Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/listings', [PropertyController::class, 'listings'])->name('landing.listings');