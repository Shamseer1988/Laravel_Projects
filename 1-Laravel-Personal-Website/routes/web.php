<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact' , [ContactController::class,'show'] )->name('contact');
Route::get('/services' , [ServicesController::class,'show'] )->name('services');
