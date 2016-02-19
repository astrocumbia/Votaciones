@extends('layouts.layoutbase')
@section('body')
	
	<div class="container margencontenedorprincipal" >
		<input type="hidden" id="url" value="{{ url('votante/ingresarine')  }}">
		<div class="row bg-primary borderedondo">
			<div class="col-md-offset-3 col-md-6" style="margin-top: 3%;margin-bottom:3%;">
				<figure>
					<img src={{ asset('img/registrado.png') }} class="img-responsive">
				</figure>		
				
			</div>
		</div>
	</div>
@endsection
@section("javascript")
	<script>
		function reload(){
			setTimeout(function(){
			   location.href = $("#url").val();
			   console.log($("#url").val());
			}, 1000);
		}

	 $( document ).ready(function() {
      console.log("wlekwe")
      reload();
    });
	</script>
@endsection