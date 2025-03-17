<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppHubController;

// OR

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


Route::get('/', [AppHubController::class, 'index'])->name('app.index');
Route::get('/app/{slug}', [AppHubController::class, 'redirect'])->name('app.redirect');
Route::get('/statistics', [AppHubController::class, 'statistics'])->name('app.statistics');