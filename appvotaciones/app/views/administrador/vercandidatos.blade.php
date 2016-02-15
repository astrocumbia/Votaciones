@extends('layouts.layoutbase')
@section('body')

	<div class="container">
		<div class="text-center">
			<h3>Candidatos</h3>
		</div>


		<div class="row">
			<div class="col-md-4">
				<!-- Button trigger modal -->
				<a class="btn btn-primary btn-block" href="{{url('/administrador/candidato/new')}}">
				  Nuevo
				</a>
			</div>
		</div>

		<div class="row">
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>ID</th>
			  		<th>Candidato</th>
			  		<th>Partido</th>
			  		<th>Logo</th>
			  		<th>Acciones</th>
			  	</tr>
			  </thead>
			
			  <tbody>
			  	@foreach( $candidatos as $candidato )
			  		<tr>
			  			<td>{{$candidato->id}}</td>
				  		<td>{{$candidato->Nombre}}</td>
				  		<td>Partido Social Democrata {{$candidato->Partido_id}}</td>
				  		<td>none</td>
				  		<td>
				  			<a class="btn btn-warning" href="{{url('administrador/candidato/edit')}}/{{$candidato->id}}">
				  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				  			</a>
				  			<a class="btn btn-danger" href="{{url('administrador/candidato/del')}}/{{$candidato->id}}">
				  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				  			</a>
				  		</td>
				  	</tr>

			  	@endforeach
			  	
			  </tbody>
			</table>
		</div>
	</div>



@endsection