@extends('layouts.layoutbase')

@section('css')
<style>

</style>
@endsection


@section('body')
	
	<div class="container margencontenedorprincipal">
		<div class="row">
			@if(Session::has('mensaje'))
	        <div class="alert alert-danger alert-dismissible" role="alert">
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          <strong>Informacíon!</strong> {{ Session::get('mensaje') }}.
	        </div>
	      @endif
		</div>
		<div class="row bg-primary borderedondo">
			<div class="col-md-12">
				{{ Form::open(array('url'=>'votante/postclaveelector')) }}
					<div class="col-md-8" style="margin-top: 8%;">
						<div class="row margencontendorcentral">
							<div class="form-group text-center">
								<label for="claveelector">Introduzca su clave de elector:</label>
								<input type="text" name"claveelector" required="required" class="form-control input-lg text-center" pattern="[A-Z0-9]{18}" maxlength="18" style="text-transform:uppercase">
							</div>
						</div>
						<div class="row text-center">
							<button type="submit" class="btn btn-success">Aceptar</button>
						</div>
					</div>
					<div class="col-md-4">
						<figure>
							<img src={{ asset('img/credencial.png') }} class="img-responsive">
						</figure>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@endsection

@section('javascript')

@endsection