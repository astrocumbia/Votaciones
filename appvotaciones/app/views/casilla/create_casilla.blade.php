@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST" accept-charset="utf-8">
					<legend>Agregar funcionario</legend>
					<div class="form-group">
						<label>MAC</label>
						<input type="text" name="mac" value="">
					</div>
					<div class="form-group">
						<label>Contraseña:</label>
						<input type="pass" name="contra" value="">
					</div>
					<div class="form-group">
						<label>Seleccione jornada</label>
						<select name="" multiple>
							<option value="-1">Prueba</option>
						</select>
					</div>
					<div class="form-group">
						<label>Seleccione lugar</label>
						<select name="" multiple>
							<option value="-1">Prueba</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop