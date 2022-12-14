<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TerceroController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Contracts\Cache\Store;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::resource('tercero', TerceroController::class);
Route::resource('vehiculo', VehiculoController::class);
