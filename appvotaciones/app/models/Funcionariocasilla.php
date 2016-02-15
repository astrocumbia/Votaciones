<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Funcionariocasilla extends Eloquent implements UserInterface, RemindableInterface{
	use UserTrait, RemindableTrait;
	protected $table = 'Funcionario_casilla';
	protected $fillable = ['nombre','huella','password','Casilla_id'];
}?>
