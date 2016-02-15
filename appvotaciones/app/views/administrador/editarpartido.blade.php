@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="text-center">
			<h3>Editar Partido</h3>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
			
			<form method="post" action="{{url('administrador/partido/update')}}" enctype="multipart/form-data">

				<div class="form-group">
					<input type="hidden" name="id" value="{{$partido->id}}" />
				    <label for="InputNombrePartido">Nombre del Partido</label>
				    <input 	type="text" class="form-control" 
				    		id="InputNombrePartido" 
				    		name="InputNombrePartido"
				    		placeholder="Nombre Partido"
							required
							autofocus
							value="{{$partido->nombre}}"
				    		>
			  	</div>
			  	  <div class="form-group">
				    <label for="InputLogoPartido">Logotipo Partido</label>
				    <input type="file" id="InputLogoPartido" name="InputLogoPartido">
				    <p class="help-block">Seleccionar logotipo</p>
				  </div>
			  	<button type="submit" class="btn btn-primary">Guardar</button>
			</form>

			</div>
		</div>
	</div>
@endsection