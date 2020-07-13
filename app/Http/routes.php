<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::bind('producto', function($id) {
	return App\Productos::where('id', $id) ->first();
});

Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('producto/{id}', [
	'as' => 'producto-detalle',
	'uses' => 'StoreController@mostrar'
]);

// Carrito
Route::get('carrito/mostrar', [
	'as' => 'carrito-mostrar',
	'uses' => 'CarritoController@mostrar'
]);

Route::get('carrito/agregar/{producto}', [
	'as' => 'carrito-agregar',
	'uses' => 'CarritoController@agregar'
]);

Route::get('carrito/borrar/{producto}', [
	'as' => 'carrito-borrar',
	'uses' => 'CarritoController@borrar'
]);

Route::get('carrito/actualizar/{producto}/{cantidad}', [
	'as' => 'carrito-actualizar',
	'uses' => 'CarritoController@actualizar'
]);

Route::get('detalle-orden', [
	// 'middleware' => 'auth',
	'as' => 'detalle-orden',
	'uses' => 'CarritoController@DetalleOrden'
]);

Route::get('detalle-orden/pagar', [
	'as' => 'detalle-pagar',
	'uses' => 'CarritoController@guardarOrden'
]);

// Autenticación
Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// registro de usuarios 
Route::get('registro', [
    'as' => 'registro-get',
    'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('registro',[
    'as' => 'registro-post',
    'uses' =>  'Auth\AuthController@postRegister'
]);