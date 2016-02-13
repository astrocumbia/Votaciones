@extends('layouts.layoutbase')
@section('body')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="" method="POST" accept-charset="utf-8">
          <legend>Casilla: </legend>
          <div class="form-group">
           {{ Form::select("casillas", $casillas, null,array('class'=>'form-control','required'=>'required','id'=>'casilla','onchange'=>'peticion(this);')) }}
          </div>
          <div class="form-group" id="funcionariosdecasilla">
            
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
  <script>
    function peticion(obj){
      var id = $(obj).val();
      console.log(id);
      $.ajax({
        url: 'casilla/test',
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
      
      console.log('lamksdlkamsdl');
    });
  </script>
@endsection