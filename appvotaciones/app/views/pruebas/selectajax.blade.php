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
<button type="button" class="btn btn-default" >Iniciar sesion</button>
