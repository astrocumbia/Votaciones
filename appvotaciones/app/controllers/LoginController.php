<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
class LoginController extends BaseController {
    // public $restful true;
    public $restful = true;
    // protected $layout = 'login';
    //establecemos restful a true
    
    public function login(){
        $funcionario1 = Input::get('funcionario1');
        $funcionario2 = Input::get('funcionario2');
        $funcionario3 = Input::get('funcionario3');
        $MAC = Input::get('mac');
        $pw = $funcionario1.$funcionario2.$funcionario3;
        $MAC = "80:56:F2:47:7A:E3";
		// $user = Input::get('nombre');
  //$password = Input::get('password');

		$log = Auth::attempt(array('MAC' => $MAC,'password'=>$pw  ) );
		if ($log) {
			return Redirect::to('votante/ingresarine');
		}else{
			return Redirect::back()
                    ->with('mensaje',"¡usuario o contraseña invalidos!");
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/')->with('log_despedida','¡Has cerrado sesión correctamente!.');
	}

	public function index(){
		//si se ha iniciado sesión no dejamos volver

        // $user = Input::get('nombre');
  //       $password = Input::get('password');
        // $log = Auth::attempt(     array('nombre' => $user,'password'=>$password  ) );
        // if ($log) {
        //  return View::make('pruebas.sesioniniciada');
        // }else{
        //  return View::make('pruebas.mensaje')->with('error_login',Input::get('nombre'))->with('log_error',"¡usuario o contraseña invalidos!");
        // }
    }

    // public function index(){
    //     //si se ha iniciado sesión no dejamos volver
    //     if(Auth::user())
    //     {
    //         return View::make('empleado.index');
    //     }
    //     //mostramos la vista views/login/index.blade.php pasando un título
    //     return View::make('login')->with('title','Login');
    //     //return View::make('login.index');
    // }
    public function crearunusuario()
    {
        DB::table('DBIFE')->insert(array(
            'clave_elector'=>"HRPEKR96100120M300",
            'cod_barras'=>"123456",
            'nombre'=>"KAREN HERNANDEZ",
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

        ));
        DB::table('DBIFE')->insert(array(
            'clave_elector'=>"ALMRAL96051720M900",
            'cod_barras'=>"123456",
            'nombre'=>"ALEJANDRA MARTINEZ",
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

        ));
        // $usuario = Funcionariocasilla::find(1);
        // if ($usuario != null) {
        //     echo "El usuario ya existe";
        //     return;
        // }
        // DB::table('lugar')->insert(array(
        //     'id'    => 1,
        //     'estado'=>'administrador',
        //     'municipio' => 'huajuapan',
        //     'localidad' => 'acatlima',
        //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        // ));
        // DB::table('Jornada')->insert(array(
        //     'id'    => 1,
        //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        // ));
        // DB::table('Casilla')->insert(array(
        //     'id'    => 1,
        //     'lugar_id' => 1,
        //     'jornada_id'=>1,            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //  ));
        //     DB::table('Funcionario_casilla')->insert(array(
        //     'id'    => 1,
        //     'nombre'=>'galleta',
        //     'password' => Hash::make('123456'),
        //     'Casilla_id'=>1,
        //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        // ));
        // DB::table('Funcionario_casilla')->insert(array(
        //     'id'    => 2,
        //     'nombre'=>'hunter',
        //     'password' => Hash::make('123456'),
        //     'Casilla_id'=>1,
        //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        // ));
        // DB::table('Funcionario_casilla')->insert(array(
        //     'id'    => 3,
        //     'nombre'=>'emiliano',
        //     'password' => Hash::make('123456'),
        //     // 'jornada_id'=>1,
        //     'Casilla_id'=>1,
        //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        // ));
        // DB::table('Funcionario_casilla')->insert(array(
        //     'id'    => 4,
        //     'nombre'=>'arena',
        //     'password' => Hash::make('123456'),
        //     'Casilla_id'=>1,
        //     'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        // ));
        // $mensaje =  "Usuario creado";
        return View::make('pruebas.mensaje')->with('mensaje',$mensaje);
    }
    
    public function pruebasimpresion()
    {
        $mensaje  = "arena y galleta";
        $funcionarios = Funcionariocasilla::select('id as IDENTIFICADOR','nombre as NOMBRE')->get();
        // $formulario  = View::make('administrador.nuevopartido')->render();
        return View::make('pruebas.test')
                    ->with("perros",$mensaje)
                    ->with("funcionarios",$funcionarios);
    }
}
