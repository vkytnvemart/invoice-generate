<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [InvoiceController::class, 'create']);
Route::post('/invoice', [InvoiceController::class, 'store']);
