@extends('layouts.layoutbase')

@section('css')
<style>
	
</style>
@endsection


@section('body')
	
	<div class="container margencontenedorprincipal">
		<div class="row bg-primary borderedondo">
			<div class="col-md-12">
				<form action="" method="POST">
					<div class="col-md-8" style="margin-top: 8%;">
						<div class="row margencontendorcentral">
							<div class="form-group text-center">
								<label for="claveelector">Introduzca su clave de elector:</label>
								<input type="text" name"claveelector" required="required" class="form-control input-lg">
							</div>
						</div>
						<div class="row text-center">
							<a type="button" class="btn btn-success" href="candidatos">Aceptar</a>
						</div>
					</div>
					<div class="col-md-4">
						<figure>
							<img src={{ asset('img/credencial.png') }} class="img-responsive">
						</figure>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop