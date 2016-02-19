<?php
class Voto extends Eloquent{
	protected $table = 'Voto';
	protected $fillable = ['time','Candidato_id','Casilla_id'];

	public static function getVotos(){
<<<<<<< HEAD
		$candidatos = Candidato::whereIn('id',array(4,5,6,11))->get();
		$res = array();
		foreach( $candidatos as $candidato ){
			$dato = array($candidato->Nombre,
				 Voto::where('Candidato_id', $candidato->id )->count()	
=======
		$candidatos = Candidato::all();
		$res = array();
		foreach( $candidatos as $candidato ){
			$dato = array('nombre' => $candidato->Nombre,
						'voto' => Voto::where('Candidato_id', $candidato->id )->count()	
>>>>>>> 3af1123b83c65e4f4e6700538602c7efa227008f
						);
			array_push($res, $dato);
			
		}
		return $res;
	}
}?>

