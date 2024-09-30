<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, "index"])->name("quote.index");
Route::get('/idezetek/house ', [QuoteController::class,"house"])->name("quote.house");
Route::get('/idezetek/modern-family ', [QuoteController::class,"modernFamily"])->name("quote.modernFamily ");