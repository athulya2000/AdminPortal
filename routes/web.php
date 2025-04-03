<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\InvoiceController;




Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('do.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::resource('/customers',CustomerController::class);

Route::resource('/invoices',InvoiceController::class);

});




