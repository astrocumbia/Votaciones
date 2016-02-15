<?php 

class AdminController extends BaseController {

  


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


/***********************************************************************
                    Métodos para manejo de candidatos
***********************************************************************/    

    /**
    *   Obtener candidatos de la DB y mostrarlos en la tabla
    */
    public function showCandidato(){
        $candidatos = Candidato::all()  ;
        return View::make('administrador.vercandidatos', array('candidatos' => $candidatos)) ;
    }

    /**
    *   Agregar candidato
    **/
    public function newCandidato()
    {
        $partidos = Partido::all();
        return View::make('administrador.nuevocandidato', array( 'partidos' => $partidos ) ) ;
    }

    /**
    *   Guardar nuevo candidato
    **/
    public function storeCandidato()
    {
        $candidato = new Candidato( array('Nombre' => Input::get('InputNombre'), 'Partido_id'=> Input::get('InputPartido') ) );
        $candidato->save();
        return Redirect::to('administrador/candidato');
    }

    /**
    *   Guardar nuevo candidato
    **/
    public function editCandidato($id)
    {
        $candidato = Candidato::find($id);
        $partidos = Partido::all();
        if( $candidato ){
            return View::make('administrador.editarcandidato', array( 'partidos' => $partidos, 'candidato' => $candidato ) ) ;                
        }
        return Redirect::to('administrador/candidato');
    }

    /**
    *   Obtener estadisticas
    **/
    public function getVotos()
    {
        $votos = Voto::all();
        return Response::json([
          ['PRD', 3],
          ['PRI DARTH VADER', 1],
          ['PN (Partido Nacional)', 4],
          ['PAN', 1]
        ]);
    }

    
}