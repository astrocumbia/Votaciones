@extends('layouts.layoutbase')
@section('body')
	<style>
		img{
			height:100%;
			width:100%;
		}
	</style>
	

	<div class="container margencontenedorprincipal ">
		{{ Form::open(array('url'=>'votante/posteleccioncandidatos')) }}
			<div class="row bg-primary borderedondo">
			{{ Form::hidden('candidatoid', null, array('id'=>'candidatoid')) }}
			<table>
				<tr>
				  	<td>
					  	<div class="col-md-8">
							<img src={{ asset('img/candidato1.png') }} class="img-responsive img-rounded" >
						</div>
						<div id="nosel1" class="col-md-2">
							<img  onclick="selecciona('7')" src={{ asset('img/noseleccionado.png') }} class="img-responsive" >
						</div>
						<div  id="sel1" class="col-md-2 ">
							<img   src={{ asset('img/seleccionado.png') }} class="img-responsive" >
						</div>
					</td>
				  	<td>
					  	<div class="col-md-8">
							<img src={{ asset('img/candidato2.png') }} class="img-responsive img-rounded" >
						</div>
						<div id="nosel2" class="col-md-2">
							<img  onclick="selecciona('8')" src={{ asset('img/noseleccionado.png') }} class="img-responsive" >
						</div>
						<div  id="sel2" class="col-md-2 ">
							<img   src={{ asset('img/seleccionado.png') }} class="img-responsive" >
						</div>
					</td>
				</tr>
				 
				<tr>
					 <td>
					  	<div class="col-md-8">
							<img src={{ asset('img/candidato3.png') }} class="img-responsive img-rounded" >
						</div>
						<div id="nosel3" class="col-md-2">
						<img  onclick="selecciona('9')" src={{ asset('img/noseleccionado.png') }} class="img-responsive" >
					</div>
						<div  id="sel3" class="col-md-2 ">
							<img   src={{ asset('img/seleccionado.png') }} class="img-responsive" >
						</div>
					</td>
				  	<td>
					  	<div class="col-md-8">
							<img src={{ asset('img/candidato1.png') }} class="img-responsive img-rounded" >
						</div>
						<div id="nosel4" class="col-md-2">
							<img  onclick="selecciona('10')" src={{ asset('img/noseleccionado.png') }} class="img-responsive" >
						</div>
						<div  id="sel4" class="col-md-2 ">
							<img   src={{ asset('img/seleccionado.png') }} class="img-responsive" >
						</div>
					</td>
				</tr>
			</table>
			<div class="col-md-4 col-md-offset-4" >
	      		<button class="btn btn-block btn-danger" type="submit">Enviar voto</button>
			</div>
		</div>
		{{ Form::close() }}
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
			$("#candidatoid").val(s);
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