<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [StudentController::class, 'show']);
Route::post('file-import', [StudentController::class, 'fileImport'])->name('file-import');


Route::get('file-export', [StudentController::class, 'fileExport'])->name('file-export');