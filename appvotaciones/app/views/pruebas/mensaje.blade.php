@extends('layouts.layoutbase')
@section('body')
  <p>Mensaje attemp sesion</p>
  {{ print_r($inputs) }}
  @if(Auth::check())
	{{ "Sesion iniciadoa" }}
  @endif
  @if(Session::has('error_login'))
  	{{ "Mensjae" }}
  	{{ Session::get('error_login') }}
  @endif
@endsection