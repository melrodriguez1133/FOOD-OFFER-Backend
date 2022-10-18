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

Route::get('/registrarEmpresas','App\Http\Controllers\registrarEmpresasController@index'); //para tener todos los registros y mostrarlos
Route::post('/registrarEmpresas','App\Http\Controllers\registrarEmpresas@store'); //crear un registro
Route::put('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresas@update'); //actualizar un registro
Route::delete('/registrarEmpresas','App\Http\Controllers\registrarEmpresas@destroy'); //borrar un registro

Route::get('/tipoNegocio','App\Http\Controllers\tipoNegocioController@index'); //para tener todos los registros y mostrarlos
Route::post('/tipoNegocio','App\Http\Controllers\tipoNegocioController@store'); //crear un registro
Route::put('/tipoNegocio/{id}','App\Http\Controllers\tipoNegocioController@update'); //actualizar un registro
Route::delete('/tipoNegocio/{id}','App\Http\Controllers\tipoNegocioController@destroy'); //borrar un registro

Route::get('/horarioApertura','App\Http\Controllers\horarioAperturaController@index'); //para tener todos los horarios y mostrarlos
Route::post('/horarioApertura','App\Http\Controllers\horarioAperturaController@store'); //crear un horario
Route::put('/horarioApertura/{id}','App\Http\Controllers\horarioAperturaController@update'); //actualizar un horario
Route::delete('/horarioApertura/{id}','App\Http\Controllers\horarioAperturaController@destroy'); //borrar un horario

Route::get('/horarioCierre','App\Http\Controllers\horarioCierreController@index'); //para tener todos los horarios y mostrarlos
Route::post('/horarioCierre','App\Http\Controllers\horarioCierreController@store'); //crear un horario
Route::put('/horarioCierre/{id}','App\Http\Controllers\horarioCierreController@update'); //actualizar un horario
Route::delete('/horarioCierro/{id}','App\Http\Controllers\horarioCierreController@destroy'); //borrar un horario
