@extends('layouts.layoutbase')
@section('body')
  <div class="container">
    <div class="row">
      <div class="jumbotron">
        <div class="container text-center">
          <h1>Bienvenido al sistema de votación UTM</h1>
          <p>Algo que quieran mostrar</p>
          <p>
            <button class="btn btn-primary btn-lg" onclick="showform()">Iniciar sesion</button>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 bg-info text-center" id="contenedorcasilla">
        {{ Form::open(array('url'=>'funcionario/login')) }}
          <legend>Elige tu casilla: </legend>
          <div class="form-group">
           {{ Form::select("casillas", $casillas, null,array('class'=>'form-control','required'=>'required','id'=>'casilla','onchange'=>'peticion(this);')) }}
          </div>
          <div class="form-group" id="funcionariosdecasilla">
            
          </div>
          {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
@section('javascript')
  <script>
    function showform(){
      console.log('showform');
      $("#contenedorcasilla").fadeIn('slow');
    }
    function peticion(obj){
      var id = $(obj).val();
      console.log(id);
      $.ajax({
        url: 'test',
        type: 'POST',
        data: {id:id },
      })
      .done(function(obj) {
        var imprimir = obj['imprimir'];
        // $("#funcionariosdecasilla").hmtl(imprimir);
        var x = document.getElementById("funcionariosdecasilla");
        $(x).html(imprimir);
        // document.getElementById("id");
        console.log(x);
      });
        }

    $( document ).ready(function() {
      $("#contenedorcasilla").hide();
      console.log('Cargado');
    });
  </script>
@endsection