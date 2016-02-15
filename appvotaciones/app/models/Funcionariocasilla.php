<?php

class Funcionariocasilla extends Eloquent{
	
	protected $table = 'Funcionario_casilla';
	protected $fillable = ['nombre','huella','password','Casilla_id'];
}?>
