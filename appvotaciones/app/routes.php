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

Route::get('/', array('uses'=>'LoginController@pruebasimpresion'));

Route::get('login', function()
{
	return View::make('login.login');
});

/*++++++++++++++++++++++++++ Vistas administrador ++++++++++++++++++++++++++*/
/*+++++++ La ruta para ver estas vistas quedaría 'administrador/* ' donde * es la ruta pasada en el get, por ejemplo el index quedaría "administrador/index" ++++++++++++++*/
Route::group(array('prefix' => 'administrador'), function()
{
	Route::get('index',function(){
		return View::make('administrador.indexadminstrador');
	});
	Route::get('nuevajornada',function(){
		return View::make('administrador.nuevajornada');
	});
	Route::get('nuevolugar',function(){
		return View::make('administrador.nuevolugar');
	});
	Route::get('nuevacasilla',function(){
		return View::make('administrador.nuevacasilla');
	});
	Route::get('nuevopartido',function(){
		return View::make('administrador.nuevopartido');
	});
	Route::get('nuevocandidato',function(){
		return View::make('administrador.nuevocandidato');
	});
	Route::get('nuevofuncionario',function(){
		return View::make('administrador.nuevofuncionario');
	});
	Route::get('vercandidatos',function(){
		return View::make('administrador.vercandidatos');
	});	
	Route::get('verpartidos',function(){
		return View::make('administrador.verpartidos');
	});	
	Route::get('vercasillas',function(){
		return View::make('administrador.vercasillas');
	});
	Route::get('verfuncionarios',function(){
		return View::make('administrador.verfuncionarios');
	});
});
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/*++++++++++++++++++++++++++ Vistas funcionariodecasilla ++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

Route::group(array('prefix' => 'funcionario'), function()
{
	Route::get('index',function(){
		return View::make('funcionariodecasilla.loginfuncionariodecasilla');
	});

});

/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


/*++++++++++++++++++++++++++ Vistas votante ++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

Route::group(array('prefix' => 'votante'), function()
{
	Route::get('index',function(){
		return View::make('votante.introducirclaveelector');
	});
	Route::get('candidatos',function(){
		return View::make('votante.vercandidatos');
	});
	Route::get('gracias',function(){
		return View::make('votante.agradecimiento');
	});
});



/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
			/*Rutas para pruebas de logueo*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
Route::get('getlogueo', function()
{
	return View::make('pruebas.login');
});
Route::post('postlogueo', array('uses'=>'LoginController@login'));
Route::get('testlogout', array('uses'=>'LoginController@logout'));
Route::get('crearunusuario', array('uses'=>'LoginController@crearunusuario'));
