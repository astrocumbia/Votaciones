@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="text-center">
			<h3>Agregar Funcionario</h3>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
			
			<form method="post" enctype="multipart/form-data">

				<div class="form-group">
				    <label for="InputNombreFuncionario">Nombre</label>
				    <input 	type="text" class="form-control" 
				    		id="InputNombreFuncionario" 
				    		name="InputNombreFuncionario"
				    		placeholder="Nombre">
			  	</div>
			  	<div class="form-group">
				    <label for="InputApellidoPFuncionario"> Apellido Paterno</label>
				    <input 	type="text" class="form-control" 
				    		id="InputApellidoPFuncionario" 
				    		name="InputApellidoPFuncionario"
				    		placeholder="Apellido Paterno">
			  	</div>
			  	<div class="form-group">
				    <label for="InputApellidoMFuncionario"> Apellido Materno</label>
				    <input 	type="text" class="form-control" 
				    		id="InputApellidoMFuncionario" 
				    		name="InputApellidoMFuncionario"
				    		placeholder="Apellido Materno">
			  	</div>
			  	  <div class="form-group">
				    <label for="InputCasilla">Numero de casilla</label>
				    <input type="number" id="numeroCasilla">
				  </div>
				<div class="form-group">
				    <label for="InputPassword">Password</label>
				    <input type="password" class="form-control" id="InputPassword" placeholder="Password">
			  	</div>
			  	<button type="submit" class="btn btn-default">Agregar</button>
			</form>

			</div>
		</div>
	</div>
@endsection