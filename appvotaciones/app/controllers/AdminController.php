<?php 

class AdminController extends BaseController {

  
    /**
    *	Obtener candidatos de la DB y mostrarlos en la tabla
    */
    public function showCandidato(){
    	
    	$candidatos = Candidato::all()	;
    	foreach ($candidatos as $item) {
    		$partido = $item->partido();
    		print_r( $partido );
    	}
    	/*
    	return View::make('candidatos.index',  array('candidatos' =>  $candidatos ) ) ;
    	*/
    }

    /**
    *	Almacenar en la DB un candidato y su respectivo partido
    */
    public function storeCandidato()
    {
    	$name = 'default.jpg';
    	
    	//Almacena la imagen dentro de public
    	if (Input::hasFile('logoPartido'))
		{
		    $originalname = md5(Input::file('logoPartido')->getClientOriginalName());
		    $ext  = Input::file('logoPartido')->getClientOriginalExtension();
		    $name = $originalname.'.'.$ext;
		    Input::file('logoPartido')->move('public/img/partidos', $name );
		}
    	
    	$partido = new Partido( array('nombre' => Input::get('nombrePartido'), 
    					 		'logo' => $name ) );
    	$partido->save();
    	
    	$candidato = new Candidato( array('Partido_id' => $partido->id, 'Nombre' => Input::get('nombreCandidato') ));
    	$candidato->save();
    	
    	

    }

}