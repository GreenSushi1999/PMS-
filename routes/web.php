<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerformanceController;

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

Route::get('/', [PerformanceController::class, 'index']);
Route::post('/ratee-info', [PerformanceController::class, 'ratee_info'])->name('ratee-info');
Route::post('/save-info', [PerformanceController::class, 'save_info'])->name('save-info');
Route::get('/instructions', [PerformanceController::class, 'instructions'])->name('instructions');
