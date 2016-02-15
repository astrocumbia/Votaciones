@extends('layouts.layoutbase')

@section('body')
	<div class="container text-center">
		<h1>Administrador</h1>
		<br /><br /><br />

		<div class="row" style="margin:10px;">
			<div class="col-md-offset-3 col-md-6">
				<a class="btn btn-primary btn-block" href="#">
					<span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
					Administradores
				</a>
			</div>
		</div>
		
		<div class="row" style="margin:10px;">
			<div class="col-md-offset-3 col-md-6">
				<a class="btn btn-primary btn-block" href="{{url('/administrador/partido')}}">
					<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
					Partidos
				</a>
			</div>
		</div>

		<div class="row" style="margin:10px;">
			<div class="col-md-offset-3 col-md-6">
				<a class="btn btn-primary btn-block" href="{{url('/administrador/candidato')}}">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					Candidatos
				</a>
			</div>
		</div>

		<div class="row" style="margin:10px;">
			<div class="col-md-offset-3 col-md-6">
				<a class="btn btn-primary btn-block" href="{{url('/administrador/verfuncionario')}}">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					Funcionarios
				</a>
			</div>
		</div>

		<div class="row" style="margin:10px;">
			<div class="col-md-offset-3 col-md-6">
				<a class="btn btn-primary btn-block" href="{{url('/administrador/vercasillas')}}">
					<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
					Casillas
				</a>
			</div>
		</div>

		<div class="row" style="margin:10px;">
			<div class="col-md-offset-3 col-md-6">
				<a class="btn btn-primary btn-block" href="{{url('/administrador/estadisticas')}}">
					<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
					Estadisticas
				</a>
			</div>
		</div>

	</div>
@stop