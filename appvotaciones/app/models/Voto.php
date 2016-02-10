<?php
class Voto extends Eloquent{
	protected $table = 'Voto';
	protected $fillable = ['time','Candidato_id','Casilla_id'];
}?>
