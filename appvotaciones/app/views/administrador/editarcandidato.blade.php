@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="text-center">
			<h3>Agregar Candidatos</h3>
		</div>



		<div class="row">
			<div class="col-md-offset-2 col-md-8">
			
			<form method="post" action="{{url('/administrador/candidato/update')}}">
				
				<input type="hidden" value="{{$candidato->id}}"/>

				<div class="form-group">
				    <label for="InputNombre">Nombre</label>
				    <input type="text" class="form-control" 
							value="{{$candidato->Nombre}}"
				    		name="InputNombre" id="InputNombre" required autofocus placeholder="Nombre candidato">
			  	</div>
			  	<div class="form-group">
						<label for="InputPartido">Partido</label>
						<select class="form-control" name="InputPartido" id="InputPartido" >
							@foreach( $partidos as $partido )
								@if( $partido->id == $candidato->Partido_id )
									<option value="{{$partido->id}}" selected> {{$partido->nombre}} </option>	
								@endif
								<option value="{{$partido->id}}"> {{$partido->nombre}} </option>	
							@endforeach
							
						</select>
			  	</div>
			  	<button type="submit" class="btn btn-default">Guardar</button>
			</form>

			</div>
		</div>
	</div>
@endsection