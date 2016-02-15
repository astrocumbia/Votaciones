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


/***********************************************************************
                    Métodos para manejo de partidos
***********************************************************************/


    /***
    *   Almacenar en la DB un candidato y su respectivo partido
    */
    public function storePartido()
    {
        $name = 'default.jpg';
        if( Input::hasFile('InputLogoPartido') )
        {
            $originalname = md5(Input::file('InputLogoPartido')->getClientOriginalName());
            $ext  = Input::file('InputLogoPartido')->getClientOriginalExtension();
            $name = $originalname.'.'.$ext;
            Input::file('InputLogoPartido')->move('public/img/partidos', $name );
        }

        $partido = new Partido( array('nombre' => Input::get('InputNombrePartido') , 'logo' => $name ) );
        $partido->save();

        return Redirect::to('administrador/partido');
    }


    /**
    *   Mostrar todos los partidos
    */    
    public function showPartido()
    {
        $partidos = Partido::all();
        return View::make( 'administrador.verpartidos', array('partidos' => $partidos) );
    }


    /**
    *   Editar partido
    */
    public function editPartido( $id )
    {
        $partido = Partido::find( $id );
        
        if( $partido ) //Existe partido
        {
            //regresar vista de editar
            return View::make( 'administrador.editarpartido', array('partido' => $partido) );
        }
        
        //No existe y hay que regresar a la principal
        return Redirect::to('administrador/partido');

    }

    /**
    *   Eliminar partido
    */
    public function deletePartido( $id )
    {
        $partido = Partido::find( $id );
        
        if( $partido ) //Existe partido
        {
            //eliminar partido
            $partido->delete();
        }
        
        //No existe y hay que regresar a la principal
        return Redirect::to('administrador/partido');

    }

    /***
    *   Almacenar en la DB un candidato y su respectivo partido
    */
    public function updatePartido()
    {
        
        $partido = Partido::find( Input::get('id') );

        if( Input::hasFile('InputLogoPartido') )
        {
            $originalname = md5(Input::file('InputLogoPartido')->getClientOriginalName());
            $ext  = Input::file('InputLogoPartido')->getClientOriginalExtension();
            $name = $originalname.'.'.$ext;
            Input::file('InputLogoPartido')->move('public/img/partidos', $name );
            $partido->logo = $name;
        }

        
        $partido->nombre =  Input::get('InputNombrePartido');
        $partido->save();

        return Redirect::to('administrador/partido');
    }



}