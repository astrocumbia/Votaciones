<?php
class Voto extends Eloquent{
	protected $table = 'Voto';
	protected $fillable = ['time','Candidato_id','Casilla_id'];

	public static function getVotos(){
		$candidatos = Candidato::whereIn('id',array(4,5,6,11))->get();
		$res = array();
		foreach( $candidatos as $candidato ){
			$dato = array($candidato->Nombre,
				 Voto::where('Candidato_id', $candidato->id )->count()	
						);
			array_push($res, $dato);
			
		}
		return $res;
	}
}?>

