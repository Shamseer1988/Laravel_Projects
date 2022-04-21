<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/' ,[BookController::class ,'show'])->name('show');


Route::get('/create_book' ,[BookController::class ,'create'])->name('book.create');
Route::post('/save_book' ,[BookController::class ,'save'])->name('book.save');


Route::get('/delete_book/{bookId}' ,[BookController::class ,'delete'])->name('book.delete');

Route::get('/view_book_detailes/{bookId}' ,[BookController::class ,'detailes'])->name('book.detailes');



Route::get('/edit_book/{bookId}' ,[BookController::class ,'edit'])->name('book.edit');
Route::post('/update_book' ,[BookController::class ,'update'])->name('book.update');
