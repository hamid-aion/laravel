<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index',[InvoiceController::class,'index']);

// Route::delete('/invoices{id}',[InvoiceController::class,'destroy'])->name('invoices.destroy');

Route::resource('/Invoices', InvoiceController::class);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/create',[RegisterController::class,'create']);
Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/loggedin',[LoginController::class,'login']);