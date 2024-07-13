<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index',[InvoiceController::class,'index']);

// Route::delete('/invoices{id}',[InvoiceController::class,'destroy'])->name('invoices.destroy');

Route::resource('/Invoices', InvoiceController::class);