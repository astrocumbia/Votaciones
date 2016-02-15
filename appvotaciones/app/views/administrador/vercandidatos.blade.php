@extends('layouts.layoutbase')
@section('body')

	<div class="container">
		<div class="text-center">
			<h3>Candidatos</h3>
		</div>


		<div class="row">
			<div class="col-md-4">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">
				  Nuevo
				</button>
			</div>
		</div>

		<div class="row">
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>Candidato</th>
			  		<th>Partido</th>
			  		<th>Logo</th>
			  		<th>Acciones</th>
			  	</tr>
			  </thead>
			
			  <tbody>
			  	<tr>
			  		<td>Juan Camaney</td>
			  		<td>Partido Social Democrata</td>
			  		<td>none</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>Juan Camaney</td>
			  		<td>Partido Social Democrata</td>
			  		<td>none</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr><tr>
			  		<td>Juan Camaney</td>
			  		<td>Partido Social Democrata</td>
			  		<td>none</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr><tr>
			  		<td>Juan Camaney</td>
			  		<td>Partido Social Democrata</td>
			  		<td>none</td>
			  		<td>
			  			<button type="button" class="btn btn-warning">
			  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			  			</button>
			  			<button type="button" class="btn btn-danger">
			  				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			  			</button>
			  		</td>
			  	</tr>
			  </tbody>
			</table>
		</div>
	</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Candidato</h4>
      </div>
      <div class="modal-body">
      <!--FORMULARIO AGREGAR CANDIDATO ! -->
			<form method="post" action="{{url('candidato/store')}}" enctype="multipart/form-data">

				<div class="form-group">
				    <label for="InputNombrePartido">Nombre Partido</label>
				    <input 	type="text" class="form-control" 
				    		id="InputNombrePartido" 
				    		name="nombrePartido"
				    		autofocus
				    		required
				    		placeholder="Nombre Partido">
			  	</div>
			  	  <div class="form-group">
				    <label for="InputLogoPartido">Logotipo Partido</label>
				    <input 	type="file" 
				    		id="InputLogoPartido" 
							name="logoPartido" 
				    		required>
				    <p class="help-block">Example block-level help text here.</p>
				  </div>
				<div class="form-group">
				    <label for="InputNombre">Nombre</label>
				    <input 	type="text" 
				    		class="form-control" 
				    		id="InputNombre" 
				    		placeholder="Nombre candidato" 
							name="nombreCandidato"
				    		required>
			  	</div>
				<button type="submit">Enviar</button>			  	
			</form>

      <!--/FORMULARIO AGREGAR CANDIDATO ! -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>	
@endsection