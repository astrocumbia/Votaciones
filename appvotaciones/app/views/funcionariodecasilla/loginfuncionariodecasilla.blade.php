@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST" >
					<legend>Longin funcionario</legend>
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<input type="text" name="nombre" requiered>
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="pass" name="password" requiered>
					</div>
					<div class="form-group">
						<label for="huella">Huella</label>
						<input type="text" name="huella">
					</div>
				</form>
			</div>
		</div>
	</div>
@stop