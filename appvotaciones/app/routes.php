<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pruebas.test');
});


Route::group(array('prefix' => 'candidato'), function()
{
	//RUTAS IRVIN
	Route::get('add',function(){
		return View::make('candidatos.add');
	});

	Route::get('show',function(){
		return View::make('candidatos.show');
	});

});
