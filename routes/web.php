<?php

use App\Provinsi;

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

Route::get('/', function (App\Provinsi $provinsis) {

	$provinsis = Provinsi::all();
	return view('provinsi.index', compact('provinsis'));
	
});

Route::resource('provinsi', 'ProvinsiController');

Route::resource('city', 'CityController');

Route::resource('kecamatan', 'KecamatanController')->except([
	'show',
]);

Route::get('/kecamatan/{id}/{cityname?}', [
	'as' => 'kecamatan.show',
	'uses' => 'KecamatanController@show'
]);

Route::resource('desa', 'DesaController')->except([
	'show',
]);

Route::get('/desa/{id}/{kecamatan?}', [
	'as' => 'desa.show',
	'uses' => 'DesaController@show'
]);

Route::resource('kodepos', 'KodePosController')->except([
	'show',
]);

Route::get('{id}/{desa}/{kecamatan}', [
	'as' => 'kodepos.show',
	'uses' => 'KodePosController@show'
]);

Route::get('/about', [
	'as' => 'home.about',
	'uses' => 'HomeController@about'
]);