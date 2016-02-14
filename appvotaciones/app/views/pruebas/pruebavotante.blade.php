@extends('layouts.layoutbase')
@section('body')
	<style>
		img{
			height:100%;
			width:100%;
		}
	</style>
	

	<div class="container margencontenedorprincipal">
		<div class="row bg-primary">
			<div class="row">
		        <div class="col-md-4">
					<div class="col-md-8">
						<img src={{ asset('img/candidato1.png') }} class="img-responsive" >
					</div>
					<div id="nosel1" class="col-md-4">
						<img  onclick="selecciona('1')" src={{ asset('img/noseleccionado.png') }} class="img-responsive" >
					</div>
					<div  id="sel1" class="col-md-4 ">
						<img   src={{ asset('img/seleccionado.png') }} class="img-responsive" >
					</div>
				</div>
		        <div class="col-md-4">
					<div class="col-md-8">
						<img src={{ asset('img/candidato1.png') }} class="img-responsive" >
					</div>
					<div id="nosel2" class="col-md-4">
						<img  onclick="selecciona('2')" src={{ asset('img/noseleccionado.png') }} class="img-responsive" >
					</div>
					<div id="sel2" class="col-md-4 ">
						<img   src={{ asset('img/seleccionado.png') }} class="img-responsive" >
					</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-8">
						<img src={{ asset('img/candidato1.png') }} class="img-responsive" >
					</div>
					<div id="nosel3" class="col-md-4">
						<img  onclick="selecciona('3')" src={{ asset('img/noseleccionado.png') }} class="img-responsive" >
					</div>
					<div id="sel3" class="col-md-4 ">
						<img   src={{ asset('img/seleccionado.png') }} class="img-responsive" >
					</div>
				</div>
      		</div>
      		<div class="row" "bg-primary">
      			<div id="nosel4" class="col-md-4">
      				<img onclick="selecciona('4')" src={{ asset('img/noseleccionadoanular.png') }} >
      			</div>
      			<div id="sel4" class="col-md-4">
      				<img src={{ asset('img/seleccionadoanular.png')}} >
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<button class="btn btn-block btn-default">Atras</button>

      			</div>
      			<div class="col-md-3 " >
      				<button class="btn btn-block btn-default">Finalizar</button>
      			</div>
      		</div>
		</div>
	</div>
@stop

@section('javascript')	
	<script>

		$( document ).ready(function() {
		   oculta('sel1');
		   oculta('sel2');
		   oculta('sel3');
		   oculta('sel4');
		});

		var selec=null; 
		function selecciona(s){
			 if(selec!=null){
			 	oculta('sel'+selec);
			 	muestra('nosel'+selec);
			 }
			 oculta('nosel'+s);
			 muestra('sel'+s);
			 selec=s;
		}
		function muestra(s){
			a="#"+s;
			$(a).show();
		}
		function oculta(s){
			a="#"+s;
			$(a).hide();
		}

	</script>
@stop