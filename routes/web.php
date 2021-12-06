<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use \App\Http\Controllers\WedstrijdenController;

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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('wedstrijden', WedstrijdenController::class);
});

Route::get('/teams', [PageController::class, 'teams'])->name('teams');

//Route::get('/wedstrijden', [PageController::class, 'wedstrijden'])->name('wedstrijden');

require __DIR__ . '/auth.php';
