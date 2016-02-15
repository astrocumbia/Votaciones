<?php 

class VotanteController extends BaseController {

    public function index()
    {
        # code...
        $funcionario = Funcionariocasilla::select('id','nombre')
                        ->where('Casilla_id','=',1)
                        ->lists('nombre','id');
        $casillas = Casilla::lists('id','id');

        Session::put('mensajeoculto', "askldmalksdml");
        return View::make('votante.principal')
                ->with("casillas",$casillas)
                ->with("funcionario",$funcionario);
    }


    public function pruebaajax(){
        $idCasilla = Input::get('id');
        $funcionario = Funcionariocasilla::select('id','nombre')
                        ->where('Casilla_id','=',$idCasilla)
                        ->get();
        $render = View::make('pruebas.selectajax')->with("funcionario",$funcionario)->render();
        return Response::json(['imprimir'=>$render]);
    }

    public function postclaveelector(){

        /*Primera vista del votante*/
        /*----REQUERIMIENTOS----*/
        /*
            -Existencia de una sesion
            -Que no haya pasado mas de 90 minutos desde el ultimo inicio de session
            -
                                    */
        /*Recibir la clave de elector*/


        /* Validar qué pueda votar, en cáso de qué no pueda votar regresar al inicio con mensaje de motivo*/

        /* Si es valido que pueda votar */
        /*colocar llave temporal para que pueda votar*/
        /*, reenviar a la siguiente vista {Enviar token para seguridad}*/
        $claveine = Input::get('claveelector');
        // $existencia = 
        $votado = Votado::where('clave_elector','=',$claveine)->get();
        if(is_null($votado)){
            return Redirect::back()
                    ->with("mensaje","Lo sentimos, su voto ya fue registrado.");
        }
        //si todo
        $candidatos = Candidato::paginate(3);
        return View::make('votante.vercandidatos')
                    ->with("candidatos",$candidatos);
    }

    public function posteleccioncandidatos()
    {

        $candidato = Input::get('candidato');
        $casilla = Auth::id();
        if ($candidato == null) {
           return Redirect::back()->with("mensaje","No pudimos recibir tu voto, intentalo de nuevo"); 
        }
        $voto  = DB::table('Voto')->insert(array(
                'time'=>\Carbon\Carbon::now()->toDateTimeString(),
                'Casilla_id'=>$casilla,
                'Candidato_id'=>$candidato,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

            ));
        return View::make('votante.gracias');
        /*----REQUERIMIENTOS----*/
        /*
            -Existencia de una sesion
            -Que no haya pasado mas de 90 minutos desde el ultimo inicio de session
            -Formulario NO NULL
            -Token Formulario
                                    */
        /*Obtener los datos del formulario*/
        /*Revisar que no sean nulos*/
        /*Validar token*/
        /*Iniciar transaccion*/
        /*Validar key*/
        /*Crear voto*/
        /*guardar voto*/
        /*Finalizar transaccion*/
        /*enviar */
    }
}

?> 