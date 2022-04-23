<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/' ,[BookController::class ,'show'])->name('show');
//For pagination cutom Url


Route::get('/create_book' ,[BookController::class ,'create'])->name('book.create');
Route::post('/save_book' ,[BookController::class ,'save'])->name('book.save');


Route::get('/delete_book/{bookId}' ,[BookController::class ,'delete'])->name('book.delete');

Route::get('/view_book_detailes/{bookId}' ,[BookController::class ,'detailes'])->name('book.detailes');



Route::get('/edit_book/{bookId}' ,[BookController::class ,'edit'])->name('book.edit');
Route::post('/update_book' ,[BookController::class ,'update'])->name('book.update');


Route::get('/activate_book/{bookId}' ,[BookController::class ,'activate'])->name('book.activate');

Route::get('/force-delete_book/{bookId}' ,[BookController::class ,'forceDelete'])->name('book.force.delete');



