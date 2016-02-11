# Votaciones
Sistema Para realizar votaciones electronicas


Mensaje:  
    Modifique el script de la base de datos, vuelvanlo a correr.

        "mysql -u root -p < DBSistema.sql"

    Después de que corran esa linea van a ir a la siguiente ruta.
                    "/crearunusuario"
    Esto creará un usuario, de username administrador y pw '123456'
    Para revisar qué el logueo de prueba este bien, abren la ruta

        "/getlogueo"

Si todo es correcto los llevará a otra vista donde podrán cerrar sesion. 

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#Cambios 10 de febrero 
En la carpeta views se agregaron la siguientes carpetas

views --+

        +->administrador

        +->funcionariosdecasilla
        
        +->reportes
        
        +->votante
Descripción de cada carpeta para que agreguen las vistas. Entre parentesis les describo que es lo que se va a mostrar a cada una. Revisen el modelo ER para saber que campos van a agregar. id,created_ad y updated_ad ignorenlos no los incluyan en sus vistas. {{ Si el archivo no existe, creenlo porfavor. }}
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

administrador-+
            
            +->indexadminstrador.php 
                (pagina principal de el administrador esta vista se mostrara despues de loguear)
            +->nuevajornada.blade.php
                (formulario para crear una jornada)
            +->nuevolugar.blade.php
                (formulario para agregar un lugar)
            +->nuevacasilla.blade.php
                (formulario para crear una casilla, este es de los mas importantes recuerden que el formulario debe llevar dos "select" uno para elegir el lugar de la casilla y otro para elegir la jornada)
            +->nuevopartido.blade.php
                (formulario para crear un partido, recuerden incluir un campo file para su imagen)
            +->nuevocandidato.blade.php
                (formulario para crear un nuevocandidato)
            +->nuevofuncionario.blade.php
                (formulario para crear un funcionario de casilla recuerden incluir un campo "select para elegir la casilla a la cual será asignado el funcionario")
            +->vercandidatos.blade.php //Esta vista dejenla para después.
                (tabla para ver los candidatos actuales)
            +->vercasillas.blade.php   //Esta vista dejenla para después.
                (tabla para ver las casillas actuales)
            +->verfuncionarios.blade.php //Esta vista dejenla para después.
                (tabla para ver funcionarios actuales)


funcionariodecasilla-+

            +->loginfuncionariodecasilla
                    (pagina inicial del sistema en el dia de las votaciones)
            +->

votante-------+

            +->introducirclaveelector.blade.php
                (formulario para que el votante introduzca su clave de elector)
            +->vercandidatos.blade.php
                (ver los candidatos que tiene para votar, recuerden incluir una imagen que seria la del partido.)
            +->agradecimiento.blade.php
                (Vista que muestre que el voto se realizo correctamente)

reportes------+
            +->


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
