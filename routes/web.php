<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\SucursalController;

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

Route::group(['prefix' => 'api'], function () {
    Route::post('/login', 'UserController@Login');
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/marcas', MarcaController::class);
    Route::apiResource('/medidas', MedidaController::class);
    Route::apiResource('/categorias', CategoriaController::class);
    Route::apiResource('/documentos', DocumentoController::class);
    Route::apiResource('/articulos', ArticuloController::class);
    Route::get('/inventarios/kardex/{articulo}', 'InventarioController@kardex');
    Route::apiResource('/inventario', InventarioController::class);
    Route::apiResource('/compras', CompraController::class);
    Route::apiResource('/ventas', VentaController::class);
    Route::apiResource('/sucursals', SucursalController::class);
});


Route::get('/', function () {
    return view('welcome');
});
