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

Route::get('/', array('before'=>'auth','uses'=>'VotanteController@index'));

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
		Route::get('del/{id}', array('uses'=>'AdminController@deletePartido') );
		
		Route::get('nuevocandidato',function(){
			return View::make('administrador.nuevocandidato');
		});
	});


/*++++++++++++++++++++++++++ Vistas candidato ++++++++++++++++++++++++++*/
	Route::group(array('prefix' => 'candidato'), function(){
		
		//Principal
		Route::get('/', array('uses'=>'AdminController@showCandidato') );
		
		//Agregar Candidato
		Route::get('new', array('uses'=>'AdminController@newCandidato') );

		//Editar Candidato
		Route::get('edit/{id}', array('uses'=>'AdminController@editCandidato') );


		//Guardar candidato
		Route::post('store', array('uses'=>'AdminController@storeCandidato') );

		//Guardar Candidato
		Route::post('update', array('uses'=>'AdminController@updateCandidato') );

		//Borrar Candidato
		Route::get('del/{id}', array('uses'=>'AdminController@deleteCandidato') );
		
	
	});


	Route::get('/',function(){
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

	
	Route::get('vercasillas',function(){
		return View::make('administrador.vercasillas');
	});
	Route::get('verfuncionarios',function(){
		return View::make('administrador.verfuncionarios');
	});
	Route::get('estadisticas',function(){
		return View::make('administrador.estadisticas', array('votos' =>  Voto::getVotos() ));
	});

});
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/*++++++++++++++++++++++++++ Vistas funcionariodecasilla ++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

Route::group(array('prefix' => 'funcionario'), function()
{
	Route::get('index',array('uses'=>'VotanteController@index'));
	Route::post('login',array('uses'=>'LoginController@login'));
	Route::post('test', array('uses'=>'VotanteController@pruebaajax'));
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
		return View::make('votante.gracias');
	});
	Route::get('prueba',function(){
		return View::make('pruebas.pruebavotante');
	});
	Route::get('index', array('uses'=>'VotanteController@index'));
	Route::post('postclaveelector', array('uses'=>'VotanteController@postclaveelector'));

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

Route::get('mac',function(){
	return View::make('pruebas.obtenermac');
});


Route::get('img/partidos/{name}',  function($name){
	return Response::download('/img/partidos/'.$name);
});