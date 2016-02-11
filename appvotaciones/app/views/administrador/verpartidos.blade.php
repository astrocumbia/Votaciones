@extends('layouts.layoutbase')
@section('body')

	<div class="container">
		<div class="text-center">
			<h3>Partidos</h3>
		</div>


		<div class="row">
			<div class="col-md-4">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-block" >
				  Nuevo
				</button>
			</div>
		</div>

		<div class="row">
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>#</th>
			  		<th>Partido</th>
			  		<th>Logo</th>
			  		</tr>
			  </thead>
			
			  <tbody>
			  	<tr>
			  		<td>1</td>
			  		<td>Partido Social Democrata</td>
			  		<td>none</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>2</td>
			  		<td>Partido de la Revolucion Democrata</td>
			  		<td>none</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>3</td>
			  		<td>Partido Revolucionario Institucional</td>
			  		<td>none</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>4</td>
			  		<td>Partido Accion Nacional</td>
			  		<td>none</td>
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

