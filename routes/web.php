<?php

use App\Http\Controllers\CalculateController;
use App\Http\Controllers\HistoryController;
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

Route::get('/', function () {
    $D = null;
    $X1 = null;
    $X2 = null;
    return view('main', compact('D', 'X1', 'X2'));
});

Route::post('calculate', [CalculateController::class, 'index'])->name('index');

Route::get('/history', [HistoryController::class, 'index'])->name('history.index');