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
			<td>
				<input type="password" class="form-control">
			</td>		
		@empty
			{{ "No hay funcionarios" }}
		@endforelse
	</tr>
	</tbody>
</table>

