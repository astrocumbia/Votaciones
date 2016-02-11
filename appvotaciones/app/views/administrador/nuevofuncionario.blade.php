@extends('layouts.layoutbase')
@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST" role="form">
					<legend>Agregar funcionario</legend>
				
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control" id="" placeholder="Nombre">
					</div>

					<div class="form-group">
						<label for="">Huella</label>
						<input type="number" class="form-control" id="" placeholder="placaso">
					</div>

					<div class="form-group">
						<label for="">password</label>
						<input type="password" class="form-control" id="" placeholder="*********">
					</div>

				
					
				
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>	
@endsection