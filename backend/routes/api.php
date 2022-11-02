<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\registrarEmpresasController;
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

Route::get('/registrarEmpresas','App\Http\Controllers\registrarEmpresasController@index'); //para tener todos los registros y mostrarlos
Route::post('/registrarEmpresas','App\Http\Controllers\registrarEmpresasController@store'); //crear un registro
Route::put('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@update'); //actualizar un registro
Route::delete('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@destroy'); //borrar un registro

Route::get('/TipoNegocio','App\Http\Controllers\tipoNegocioController@index'); //para tener todos los registros y mostrarlos
Route::post('/TipoNegocio','App\Http\Controllers\tipoNegocioController@store'); //crear un registro
Route::put('/TipoNegocio/{id}','App\Http\Controllers\tipoNegocioController@update'); //actualizar un registro
Route::delete('/TipoNegocio/{id}','App\Http\Controllers\tipoNegocioController@destroy'); //borrar un registro

Route::get('/producto','App\Http\Controllers\ProductoController@index'); //para tener todos los registros y mostrarlos
Route::post('/producto','App\Http\Controllers\ProductoController@store'); //crear un registro
Route::put('/producto/{id}','App\Http\Controllers\ProductoController@update'); //actualizar un registro
Route::delete('/producto/{id}','App\Http\Controllers\ProductoController@destroy'); //borrar un registro