@extends('layouts.layoutbase')
@section('body')
  <p>Mensaje attemp sesion</p>
  @if(Session::has('error_login'))
  	{{ "Mensjae" }}
  	{{ Session::get('error_login') }}
  @endif
@endsection