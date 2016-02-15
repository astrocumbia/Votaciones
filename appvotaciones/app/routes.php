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

Route::get('/', array('uses'=>'VotanteController@index'));

Route::get('login', function()
{
	return View::make('login.login');
});

/*++++++++++++++++++++++++++ Vistas administrador ++++++++++++++++++++++++++*/
/*+++++++ La ruta para ver estas vistas quedaría 'administrador/* ' donde * es la ruta pasada en el get, por ejemplo el index quedaría "administrador/index" ++++++++++++++*/
Route::group(array('prefix' => 'administrador'), function()
{

	/*++++++++++++++++++++++++++ Vistas partido ++++++++++++++++++++++++++*/
	Route::group(array('prefix' => 'partido'), function(){
		
		//Principal
		Route::get('/', array('uses'=>'AdminController@showPartido') );
		
		//Agregar Partido
		Route::get('new',function(){
			return View::make('administrador.nuevopartido');
		});

		//Editar Partido
		Route::get('edit/{id}', array('uses'=>'AdminController@editPartido') );


		//Guardar partido
		Route::post('store', array('uses'=>'AdminController@storePartido') );

		//Guardar partido
		Route::post('update', array('uses'=>'AdminController@updatePartido') );

		//Borrar partido
		Route::post('del/{id}', array('uses'=>'AdminController@deletePartido') );
		
		Route::get('nuevocandidato',function(){
			return View::make('administrador.nuevocandidato');
		});
	});

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
	

	Route::get('nuevofuncionario',function(){
		return View::make('administrador.nuevofuncionario');
	});
	Route::get('verfuncionario',function(){
		return View::make('administrador.verfuncionario');
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
	Route::get('estadisticas',function(){
		return View::make('administrador.estadisticas');
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

	Route::get('ingresarine',function(){
		return View::make('votante.introducirclaveelector');
	});
	Route::get('candidatos',function(){
		return View::make('votante.vercandidatos');
	});
	Route::get('gracias',function(){
		return View::make('votante.agradecimiento');
	});
	Route::get('prueba',function(){
		return View::make('pruebas.pruebavotante');
	});
	Route::get('index', array('uses'=>'VotanteController@index'));
	Route::post('test', array('uses'=>'VotanteController@pruebaajax'));

	// Route::get('principal',function(){
	// 	return View::make('votante.principal');
	// });
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
