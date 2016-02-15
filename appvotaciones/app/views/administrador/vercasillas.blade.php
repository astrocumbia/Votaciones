@extends('layouts.layoutbase')
@section('body')

	<div class="container">
		<div class="text-center">
			<h3>Casillas</h3>
		</div>


		<div class="row">
			<div class="col-md-4">
				<!-- Button trigger modal -->
				<a class="btn btn-primary btn-block" href="{{url('/administrador/nuevacasilla')}}">
				  Nuevo
				</a>
			</div>
		</div>

		<div class="row">
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>ID</th>
			  		<th>MAC</th>
			  		<th>Creación</th>
			  		<th>Acciones</th>
			  	</tr>
			  </thead>
			
			  <tbody>
			  	<tr>
			  		<td>1</td>
			  		<td>10:2F:33:54:A3</td>
			  		<td>14/02/2016</td>
			  		<td>
			  			<a class="btn btn-warning" href="#">
				  			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</a>
			  			<a class="btn btn-danger" href="#">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</a>
			  		</td>
			  	</tr>
			  	
			  </tbody>
			</table>
		</div>
	</div>



@endsection