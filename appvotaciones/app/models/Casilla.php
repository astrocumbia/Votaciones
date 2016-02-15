<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class Casilla extends Eloquent implements UserInterface, RemindableInterface{
	use UserTrait, RemindableTrait;
	
	protected $table = 'Casilla';
	protected $fillable = ['MAC','password','Jornada_id','Lugar_id'];
}?>
