@extends('layouts.layoutbase')
@section('body')
	<style>
		img{
			height:100%;
			width:100%;
		}
	</style>
	<div class="container">
		<div class="row bg-primary">
			<div class="col-md-12">
				<form action="" method="POST">
					<div class="col-md-4 col-md-offset-2">
						<div class="row">
							<label for="claveelector">Introduzca su clave de elector:</label>
							<input type="text" name"claveelector" requiered>
						</div>
						<div class="row">
							<button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
						</div>
					</div>
					<div class="col-md-4">
						<figure>
							<img src={{ asset('img/credencial.png') }} >
						</figure>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop