<?php

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

/*Route::get('/', function () {
    return view('layout/layout');
});*/

/*Route::get('/login', function () {
    return view('login/login');
});*/
Auth::routes();

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@index');

Route::group(['middleware' => 'App\Http\Middleware\Admin'], function(){

Route::get('/temperaturaHumedad', 'HomeController@temperaturaHumedad');

Route::get('ajax/temperatura', 'TemperaturaController@getTemperaturas');
Route::get('ajax/humedad', 'HumedadController@getHumedad');

Route::get('ajax/temperatura/{fecha1}/{fecha2}', 'TemperaturaController@getTemperaturasFiltro');
Route::get('ajax/humedad/{fecha1}/{fecha2}', 'HumedadController@getHumedadFiltro');

Route::get('/configuracionUsuarios', 'UsersController@index');

Route::post('cambiarRol', 'UsersController@updateRol');


});
