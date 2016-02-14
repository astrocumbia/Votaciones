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
					<img src={{ asset('img/candidato1.png') }} class="img-responsive" >
				</div>
		        <div class="col-md-4">
		        	<img src={{ asset('img/candidato2.png') }} class="img-responsive" >
				</div>
		        <div class="col-md-4">
		        	<img src={{ asset('img/candidato3.png') }} class="img-responsive" >
		        </div>
      		</div>
      		<div class="row" "bg-primary">
      			<div class="col-md-4">
      				<figure>
							<img src={{ asset('img/noseleccionadoanular.png') }} >
					</figure>
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