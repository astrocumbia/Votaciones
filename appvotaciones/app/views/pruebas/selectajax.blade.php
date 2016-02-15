<table class="table table-hover">
	<thead>
		<th>Nombre</th>
	</thead>
	<tbody>
	<tr>
		@forelse($funcionario as $persona)
		
			<td>
				{{ $persona->nombre }}
				<input type="password" class="form-control">

			</td>	
		@empty
			{{ "No hay funcionarios" }}
		@endforelse
	</tr>
	</tbody>
</table>
<a type="button" class="btn btn-default" href="votante/ingresarine">Iniciar sesion</a>
