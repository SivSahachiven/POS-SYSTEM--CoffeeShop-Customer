<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

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


Route::get('/', [FrontPageController::class, 'index'])->name('index');
Route::get('edit', [FrontPageController::class, 'edit'])->name('edit');
Route::get('create', [FrontPageController::class, 'create'])->name('create');