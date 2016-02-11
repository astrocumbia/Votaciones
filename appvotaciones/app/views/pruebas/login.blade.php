@extends('layouts.layoutbase')
@section('body')
<div class="container">
  {{-- <form class="form-signin" action="postlogueo" method="POST"> --}}
  {{ Form::open(array('class'=>'form-signin','url'=>'postlogueo')) }}
    <h2 class="form-signin-heading">Logueo de prueba</h2>
    <label for="inputEmail" class="sr-only">usuario</label>
    <input type="text" name="nombre" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <div class="checkbox">
      {{-- <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label> --}}
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  </form>

</div> <!-- /container -->
@endsection