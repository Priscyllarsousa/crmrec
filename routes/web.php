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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/medicos', 'middleware'=>['auth'], 'as' => 'medicos.'], function () {
	Route::match( array( 'GET' ), '', array('as' => 'index', 'uses' => 'MedicosController@all'));
	Route::match( array( 'GET', 'POST' ), '/create', array('as' => 'create', 'uses' => 'MedicosController@create'));
	Route::match( array( 'GET', 'PATCH' ), '/{ID}/edit', array('as' => 'edit', 'uses' => 'MedicosController@edit'));
	Route::match( array( 'DELETE' ), '/{ID}/delete', array('as' => 'destroy', 'uses' => 'MedicosController@destroy'));
});

Route::group(['prefix' => '/clinicas', 'middleware'=>['auth'], 'as' => 'clinicas.'], function () {
	Route::match( array( 'GET' ), '', array('as' => 'index', 'uses' => 'ClinicaController@all'));
	Route::match( array( 'GET', 'POST' ), '/create', array('as' => 'create', 'uses' => 'ClinicaController@create'));
	Route::match( array( 'GET', 'PATCH' ), '/{ID}/edit', array('as' => 'edit', 'uses' => 'ClinicaController@edit'));
	Route::match( array( 'GET', 'PATCH' ), '/{ID}/show', array('as' => 'show', 'uses' => 'ClinicaController@show'));
	Route::match( array( 'DELETE' ), '/{ID}/delete', array('as' => 'destroy', 'uses' => 'ClinicaController@destroy'));
});

