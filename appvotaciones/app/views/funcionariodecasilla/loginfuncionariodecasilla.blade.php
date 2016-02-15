@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST" >
					<legend>Login funcionario</legend>
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<input type="text" name="nombre" required class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Contraseña:</label>
						<input type="password" name="password" required class="form-control">
					</div>
					<div class="form-group">
						<label for="huella">Huella</label>
						<input type="text" name="huella" class="form-control">
					</div>
				</form>
			</div>
		</div>
	</div>
@stop