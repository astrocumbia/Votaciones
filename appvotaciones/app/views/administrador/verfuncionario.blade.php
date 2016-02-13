@extends('layouts.layoutbase')
@section('body')

	<div class="container">
		<div class="text-center">
			<h3>Funcionarios</h3>
		</div>


		<div class="row">
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>Nombre</th>
			  		<th>Apellido Paterno</th>
			  		<th>Apellido Materno</th>
			  		<th>Numero de casilla</th>
			  	</tr>
			  </thead>
			
			  <tbody>
			  	<tr>
			  		<td>El brayan</td>
			  		<td>Garzon</td>
			  		<td>Camarena</td>
			  		<td>10008000</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr>
			  	
			  </tbody>
			</table>
		</div>
	</div>


        
@endsection