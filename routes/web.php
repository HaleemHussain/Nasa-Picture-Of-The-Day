<?php

use App\Http\Controllers\NasaController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/', [NasaController::class, 'getData']);
Route::post('date/selection', [NasaController::class, 'dateSelection'])->name('dateSelection');
Route::get('select', [NasaController::class, 'select'])->name('select');

