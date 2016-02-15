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
        return View::make('hello.php');
    }

    public function posteleccioncandidatos()
    {
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