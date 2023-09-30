<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('teste', \App\Http\Controllers\TesteController::class);
Route::apiResource('categorias', \App\Http\Controllers\CategoriaController::class);
Route::apiResource('ingredientes', \App\Http\Controllers\IngredienteController::class);
Route::apiResource('pratos', \App\Http\Controllers\PratoController::class);

Route::apiResource('pratos-has-ingredientes', \App\Http\Controllers\PratoHasIngredientesController::class);
Route::apiResource('pratos-has-images', \App\Http\Controllers\PratoHasImageController::class);
Route::apiResource('categorias-has-images', \App\Http\Controllers\CategoriaHasImageController::class);



Route::apiResource('clientes', \App\Http\Controllers\ClienteController::class);
Route::apiResource('mesas', \App\Http\Controllers\MesaController::class);
Route::apiResource('reservas', \App\Http\Controllers\ReservaController::class);
Route::apiResource('images', \App\Http\Controllers\ImageController::class);
