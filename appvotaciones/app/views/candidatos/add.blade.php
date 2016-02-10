@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="text-center">
			<h3>Agregar Candidatos</h3>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
			
			<form method="post" enctype="multipart/form-data">

				<div class="form-group">
				    <label for="InputNombrePartido">Nombre Partido</label>
				    <input 	type="text" class="form-control" 
				    		id="InputNombrePartido" 
				    		name="InputNombrePartido"
				    		placeholder="Nombre Partido">
			  	</div>
			  	  <div class="form-group">
				    <label for="InputLogoPartido">Logotipo Partido</label>
				    <input type="file" id="InputLogoPartido">
				    <p class="help-block">Example block-level help text here.</p>
				  </div>
				<div class="form-group">
				    <label for="InputNombre">Nombre</label>
				    <input type="text" class="form-control" id="InputNombre" placeholder="Nombre candidato">
			  	</div>
			  	<button type="submit" class="btn btn-default">Submit</button>
			</form>

			</div>
		</div>
	</div>
@endsection