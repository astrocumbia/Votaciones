@extends('layouts.layoutbase')
@section('body')
  <div class="container">
    <div class="row">
      @if(Session::has('mensaje'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Peligro!</strong> {{ Session::get('mensaje') }}.
        </div>
      @endif
    </div>
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
          <div class="form-group">
            {{ Form::hidden('mac',null,array('id'=>'mac')) }}
          </div>
          <div class="form-group" id="funcionariosdecasilla">
            
          </div>
          {{ Form::close() }}
      </div>
    </div>
  </div>
@endsection
@section('javascript')
  <!-- <script type="text/javascript" src="http://l2.io/ip.js?var=myip"></script> -->
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
        // console.log(x);
      });
        }

      function getmac() {
        var locator = new ActiveXObject("WbemScripting.SWbemLocator");
        var service = locator.ConnectServer(".");
        var properties = service.ExecQuery("SELECT * FROM Win32_NetworkAdapterConfiguration");
        var e = new Enumerator (properties);
        for (i=0;!e.atEnd();e.moveNext (),i++)
        {
          if (i==2) {
            var p = e.item ();
            var x = p.MACAddress; 
            return x;
          }
        }
      }

  $( document ).ready(function() {
      // alert(myip);
      $("#contenedorcasilla").hide();
      $("#mac").val(getmac())
      // console.log('Cargado');
      // console.log(getmac());
      // alert(getmac());
      // console.log(mmjsCountryName);
      // console.log(mmjsCountryCode);
    });
  </script>
@endsection