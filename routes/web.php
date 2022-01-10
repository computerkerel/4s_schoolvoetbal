<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use \App\Http\Controllers\MatchController;
use \App\Http\Controllers\TeamController;
use \App\Http\Controllers\PlayerController;
use \App\Http\Controllers\FieldController;

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

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/dashboard', [PageController::class, 'dashboard'])
    ->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('wedstrijden', MatchController::class);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('teams', TeamController::class);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('players', PlayerController::class);
});

Route::post('/players/{team}', [PlayerController::class, 'store'])
    ->name('players.store');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('fields', FieldController::class);
});

Route::get('/fields', [FieldController::class, 'index'])
    ->name('fields');

Route::get('/teams', [TeamController::class, 'index'])
    ->name('teams');

Route::get('/players', [PlayerController::class, 'index'])
    ->name('players');

Route::get('/events', [MatchController::class, 'index'])
    ->name('events');

Route::post('/events/clear', [MatchController::class, 'clear'])
    ->middleware('auth')
    ->name('events.clear');

require __DIR__ . '/auth.php';
