<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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

/*Route::post('/Usuario','App\Http\Controllers\UsuarioController@store'); //crear un registro
Route::post('login', [UsuarioController::class, 'login']);

Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::get('user',[UsuarioController::class, 'userProfile']);
    Route::post('logout', [UsuarioController::class, 'logout']);
});

Route::get('allUsers', [UsuarioController::class, 'allUsers'])*/

Route::get('/registrarEmpresas','App\Http\Controllers\registrarEmpresasController@index'); //para tener todos los registros y mostrarlos
Route::post('/registrarEmpresas','App\Http\Controllers\registrarEmpresasController@store'); //crear un registro
Route::get('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@show'); //para mostrarlos los registros
Route::put('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@update'); //actualizar un registro
Route::delete('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@destroy'); //borrar un registro

Route::get('/Producto','App\Http\Controllers\ProductoController@index'); //para tener todos los prodcutos y mostrarlos
Route::post('/Producto','App\Http\Controllers\ProductoController@store'); //crear un registro
Route::get('/Producto/{id}','App\Http\Controllers\ProductoController@show'); //para mostrarlos los registros
Route::put('/Producto/{id}','App\Http\Controllers\ProductoController@update'); //actualizar un registro
Route::delete('/Producto/{id}','App\Http\Controllers\ProductoController@destroy'); //borrar un registro

Route::get('/Categoria','App\Http\Controllers\CategoriaController@index'); //para tener todas las categorias y mostrarlas
Route::post('/Categoria','App\Http\Controllers\CategoriaController@store'); //crear un registro
Route::get('/Categoria/{id}','App\Http\Controllers\CategoriaController@show'); //para mostrar todas las categorias
Route::put('/Categoria/{id}','App\Http\Controllers\CategoriaController@update'); //actualizar un registro
Route::delete('/Categoria/{id}','App\Http\Controllers\CategoriaController@destroy'); //borrar un registro

Route::get('/Producto/imagen/products/{img}','App\Http\Controllers\ProductoController@getimages');

Route::put('/Usuario/{id}','App\Http\Controllers\UsuarioController@update'); //actualizar un registro
Route::delete('/Usuario/{id}','App\Http\Controllers\UsuarioController@destroy'); //borrar un registro
Route::get('/Usuario','App\Http\Controllers\UsuarioController@index'); //para tener todas las categorias y mostrarlas
Route::post('/Usuario','App\Http\Controllers\UsuarioController@store'); //crear un registro
Route::get('/Usuario/{id}','App\Http\Controllers\UsuarioController@show'); //para mostrar todas las categorias