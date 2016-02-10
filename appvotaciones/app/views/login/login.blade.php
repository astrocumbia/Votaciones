@extends('layouts.layoutbase')
@section('body')


	<div class="container">
  
           <div class="row" id="pwd-container">
                  <div class="jumbotron boxlogin">
                        <form method="POST" name="login" id="login">
                               <label>Usuario:</label>
                               <input type="text" name="username" id="username" class="form-control">
                               <label>Contraseña:</label>
                               <input type="password" name="password" id="password" class="form-control">
                               <input  type="submit" class="btn btn-primary" value="Conectarse" >
                        </form>
                  </div>
           </div>
  </div>
@endsection