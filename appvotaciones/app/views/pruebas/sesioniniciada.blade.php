@extends('layouts.layoutbase')
@section('body')
  @if(Auth::check())
    {{ "Sesion exitosa" }}
  @else
    {{ "No hay sesion" }}
  @endif

  <a href="testlogout" class="btn btn-primary">Cerrar Sesion</a>
@endsection