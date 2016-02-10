<?php
class Casilla extends Eloquent{
	protected $table = 'Casilla';
	protected $fillable = ['MAC','password','Jornada_id','Lugar_id'];
}?>
