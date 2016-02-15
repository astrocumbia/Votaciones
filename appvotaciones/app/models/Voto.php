<?php
class Voto extends Eloquent{
	protected $table = 'Voto';
	protected $fillable = ['time','Candidato_id','Casilla_id'];

	public static function getVotos(){
		$candidatos = Candidato::all();
		$res = array();
		foreach( $candidatos as $candidato ){
			$dato = array('nombre' => $candidato->Nombre,
						'voto' => Voto::where('Candidato_id', $candidato->id )->count()	
						);
			array_push($res, $dato);
			
		}
		return $res;
	}
}?>
