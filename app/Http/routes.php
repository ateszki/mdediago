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

//Route::get('/', 'FrontController@index');
Route::get('/', function ()    {
    return view('mantenimiento');
});

Route::get('/regiones/{nombre_provincia}/{nombre_localidad}','RegionesController@localidad');
Route::get('/regiones/{nombre_provincia}','RegionesController@localidades');
Route::get('/regiones','RegionesController@index');
Route::get('/especialidades/{nombre_especialidad}','RegionesController@especialidad');
Route::get('/especialidades','RegionesController@especialidades');

Route::get('home', 'FrontController@index');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider')->where(["provider"=>"(google|twitter|facebook)"]);
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback')->where(["provider"=>"(google|twitter|facebook)"]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
