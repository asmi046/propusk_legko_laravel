<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\SenderController;

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

Route::get('/', [IndexController::class, "index"])->name("home");

Route::get('/thencs', [SenderController::class, "show_thencs"])->name('thencs');
Route::post('/send_consult', [SenderController::class, "send_consultation"])->name('send_consultation');
Route::post('/send_salses', [SenderController::class, "send_salses"])->name('send_salses');
Route::post('/send_pay', [SenderController::class, "send_pay"])->name('send_pay');
Route::get('/show_buy', [SenderController::class, "show_buy"])->name('show_buy');

