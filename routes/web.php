<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

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

Route::get('calculadora', [CalculadoraController::class, 'index'])->name('calculadora_index');
Route::get('segundaDose', [CalculadoraController::class, 'segundaDose'])->name('segundaDose');
Route::get('terceiraDose', [CalculadoraController::class, 'terceiraDose'])->name('terceiraDose');