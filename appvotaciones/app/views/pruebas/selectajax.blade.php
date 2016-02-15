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
	<td></td>
	<td>
		{{ Form::submit("Iniciar sesion",array('class'=>'btn btn-primary')) }}
	</td>
	<td></td>
	</tbody>
</table>
<!-- <a type="button" class="btn btn-default" href="votante/ingresarine">Iniciar sesion</a> -->
