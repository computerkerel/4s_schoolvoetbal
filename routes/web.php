<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [\App\Http\Controllers\PageController::class,'welcome'])->name('welcome');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');


Route::get('/dashboard', [\App\Http\Controllers\PageController::class,'dashboard'])->name('dashboard');

Route::get('/teams', [\App\Http\Controllers\PageController::class,'teams'])->name('teams');

Route::get('/wedstrijden', [\App\Http\Controllers\PageController::class,'wedstrijden'])->name('wedstrijden');

require __DIR__.'/auth.php';
