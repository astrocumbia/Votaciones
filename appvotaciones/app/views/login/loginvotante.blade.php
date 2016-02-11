@extends('layouts.layoutbase')
@section('body')
<div class="container">
  <div class="row">
    
  <div class="col-md-6">
    
    <form class="form-signin">
        <h2 class="form-signin-heading">Ingrese su clave de elector</h2>
        <label class="sr-only">Clave de elector</label>
        <input type="text" id="clave1" class="form-control" placeholder="Clave de elector" required autofocus>
        <label class="sr-only">Clave de elector</label>
        <input type="text" id="clave2" class="form-control" placeholder="clave de elector" required>
         
        <button class="btn btn-lg btn-primary btn-block" type="submit">Siguiente</button>
    </form>

  </div>   
  <div class="col-md-6">
    {{ HTML::image('img/credencial.png',null,array('class'=>'img-responsive')) }}
  </div> 

  </div>
</div> 

	 
@endsection