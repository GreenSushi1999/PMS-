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
<<<<<<< HEAD

Route::get('/', [PerformanceController::class, 'index']);
Route::post('/ratee-info', [PerformanceController::class, 'ratee_info'])->name('ratee-info');
=======
 
Route::get('/',[PerformanceController::class, 'index']);

>>>>>>> 1cbbd537fe19d81e5c3afe81be18a006508bccf1
