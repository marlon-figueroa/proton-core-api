<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;

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

Route::apiResource('/api/marcas', MarcaController::class);
Route::apiResource('/api/medidas', MedidaController::class);
Route::apiResource('/api/categorias', CategoriaController::class);
Route::apiResource('/api/articulos', ArticuloController::class);

Route::get('/', function () {
    return view('welcome');
});
