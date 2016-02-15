<div class="row">
	<!-- <button class="btn btn-primary" type="button">aslnmdlasd</button> -->
</div>
<div class="row">
	<table class="table table-hover">

		<thead>
			<th>Nombre</th>
		</thead>
		<tbody>
		<tr>
			@forelse($funcionario as $persona)
				<td>
					{{ $persona->nombre }}
					
				</td>	
			@empty
				{{ "No hay funcionarios" }}
			@endforelse
		</tr>
			<tr>
				<td>{{ Form::password('funcionario1', array('class'=>'form-control')) }}</td>
				<td>{{ Form::password('funcionario2', array('class'=>'form-control')) }}</td>
				<td>{{ Form::password('funcionario3', array('class'=>'form-control')) }}</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="row text-center">
	<div class="col-md-12">
		<button class="btn btn-primary" type="submit">Iniciar Sesion</button>
	</div>
</div>

<!-- <a type="button" class="btn btn-default" href="votante/ingresarine">Iniciar sesion</a> -->
