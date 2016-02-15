@extends('layouts.layoutbase')
@section('body')

	<div class="container">
		<div class="text-center">
			<h3>Partidos</h3>
		</div>


		<div class="row">
			<div class="col-md-4">
				<!-- Button trigger modal -->
				<a class="btn btn-primary btn-block" href="{{url('administrador/partido/new')}}">
				  Nuevo
				</a>
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
			  	@foreach( $partidos as $partido )
				<tr>
			  		<td>{{$partido->id}}</td>
			  		<td>{{$partido->nombre}}</td>
			  		<td>
			  			<img src="{{url('')}}/img/partidos/{{$partido->logo}}" alt="..." class="img-rounded" height="50" width="50">
			  		</td>
			  		<td>
			  			<a class="btn btn-warning" href="{{url('administrador/partido/edit')}}/{{$partido->id}}">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</a>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr>
			  	@endforeach
			  </tbody>
			</table>
		</div>
	</div>

<