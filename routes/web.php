<?php

use App\Http\Controllers\VehiculoController;
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
    return view('welcome');
});

Route::get('/vehiculo/excel', function () {
    return view('vehiculo.excel');
});



Route::resource('vehiculo', VehiculoController::class);

Route::get('/vehiculo/excel', [VehiculoController::class, 'exportar']);
