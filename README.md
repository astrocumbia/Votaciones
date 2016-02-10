# Votaciones
Sistema Para realizar votaciones electronicas

#Lineas para crear usuarios 
CREATE USER 'seguridad'@'localhost' IDENTIFIED BY 'seguridad';

#Linea para dar permisos al usuario
GRANT ALL PRIVILEGES ON seguridad . * TO 'seguridad'@'localhost';


#8 de febrero 2016 8:36 p.m
Agregue los css y js a la carpeta public.
Hice una carpeta layouts en "Votaciones/appvotaciones/app/views/layouts", dentro de esta carpeta va un archivo "layoutbase.blade.php" heredenlo a cualquier vista que hagan, para hacer esto dentro de la vista que hagan colocan lo siguiente "

@extends('layouts.layoutbase')
@section('body')

@endsection

"
Con esto obtendrán la plantilla y no tendrán que incluir bootstrap.
Todo su HTML debe estar dentro de @section('body') y @endsection
