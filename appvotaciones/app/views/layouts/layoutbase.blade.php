<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="{{url()."/favicon.ico"}}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	
	{{ HTML::style('css/bootstrap.css');}}
    {{ HTML::style('css/jquery-ui.css');}}
	{{ HTML::script('js/jquery-2.1.3.js');}}
	<script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>


	<title>Votaciones</title>
	@yield("estilos")
	@yield("campodeprueba")
</head>
@yield("body")
</html>