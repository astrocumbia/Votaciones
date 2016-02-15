@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<form action="" method="POST" accept-charset="utf-8">
					<legend class="text-center">Agregar Casilla</legend>
					<div class="form-group">
						<label>MAC</label>
						<input type="text" name="mac" value="" class="form-control">
					</div>
					<div class="form-group">
						<label>Contraseña:</label>
						<input type="pass" name="contra" value="" class="form-control">
					</div>
					<div class="form-group">
						<label>Seleccione jornada</label>
						<select name="" multiple class="form-control">
							<option value="-1">Prueba</option>
						</select>
					</div>
					<div class="form-group" >
						<label>Seleccione lugar</label>
						<select name="" multiple class="form-control">
							<option value="-1">Prueba</option>
						</select>
					</div>
					<button type="submit" class="btn btn-default">Guardar</button>
				</form>
			</div>
		</div>
	</div>
@stop