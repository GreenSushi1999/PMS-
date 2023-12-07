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

Route::get('/', function () {
    return view('main-page.index');
});

Route::get('/ratee-information', [PerformanceController::class, 'info']);
Route::post('/ratee-information', [PerformanceController::class, 'infos'])->name('ratee-info');

