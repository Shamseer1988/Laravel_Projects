<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;





Route::post('/' , [StudentController::class , 'create'])->name('create');
Route::get('/' , [StudentController::class , 'index'])->name('index');

Route::get('/edit/{id}' , [StudentController::class , 'edit'])->name('edit');

Route::put('/edit/{id}' , [StudentController::class , 'update'])->name('update');


Route::get('delete/{id}' , [StudentController::class , 'destroy'])->name('destroy')->name('destroy');
