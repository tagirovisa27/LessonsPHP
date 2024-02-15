<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;



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

Route::get('#my_portfolio', [indexController::class, 'main'])->name(name:'portfolio');

Route::get('#about', [indexController::class, 'main'])->name(name:'about');

Route::get('#discussions', [indexController::class, 'main'])->name(name:'contacts');

Route::get('/', [indexController::class, 'main']);



