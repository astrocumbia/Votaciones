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
			<div class="row">
						@if(Session::has('mensaje'))
				        <div class="alert alert-danger alert-dismissible" role="alert">
				          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				          <strong>Informacíon!</strong> {{ Session::get('mensaje') }}.
				        </div>
				      @endif
			</div>
			<div class="row">
			<div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			     <img src={{ asset('img/candidato1.png') }} class="img-responsive img-rounded" >
			      <div class="caption">
			        <h3></h3>
			        <!-- <p>texto</p> -->
			        <input required="required" class="" type="radio" name="candidato" value="{{  $candidatos[0]->id}}"> {{ $candidatos[0]->Nombre }}<br>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			     <img src={{ asset('img/candidato2.png') }} class="img-responsive img-rounded" >
			      <div class="caption">
			        <h3></h3>
			        <!-- <p>texto</p> -->
			        <input required="required" class="" type="radio" name="candidato" value="{{ $candidatos[1]->id }}"> {{ $candidatos[1]->Nombre }}<br>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			     <img src={{ asset('img/candidato3.png') }} class="img-responsive img-rounded" >
			      <div class="caption">
			        <h3></h3>
			        <!-- <p>texto</p> -->
			       <input required="required" class="" type="radio" name="candidato" value="{{ $candidatos[2]->id }}"> {{ $candidatos[2]->Nombre }}<br>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-3 text-center">
			    <div class="thumbnail">
			     <img src={{ asset('img/candidato0.png') }} class="img-responsive img-rounded" >
			      <div class="caption">
			        <h3>Anular voto</h3>
			        <!-- <p>texto</p> -->
			        <input required="required" class="" type="radio" name="candidato" value="0"> {{ $candidatos[2]->Nombre }}<br>
			    </div>
			  </div>
			</div>
			<div class="row text-center">
				<button class="btn btn-primary btn-lg" type="submit">Enviar voto</button>
			</div>
		{{ Form::close() }}
	</div>
	
	
@endsection

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
@endsection