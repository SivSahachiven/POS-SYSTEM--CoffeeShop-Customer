<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [CustomerController::class, 'index'])->name('index');
Route::get('edit', [CustomerController::class, 'edit'])->name('edit');
Route::get('create', [CustomerController::class, 'create'])->name('create');
Route::get('hidding', [CustomerController::class, 'hidding'])->name('hidding');

//call it from customerCotroller
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::get('/customers/{id}/destroy', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::post('/customers/{id}/update', [CustomerController::class, 'update'])->name('customers.update');
Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');

