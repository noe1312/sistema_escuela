<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cursos</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />

    <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
    />
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        h1{
            font-family: "Trebuchet MS", Verdana, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <H1 class="col s12 center-align">REGISTRO DE CURSOS</H1>
    <?php
     include("class/clase_curso.php");
     $obj_curso=new curso("","","");
     $obj_curso->listar();
?>
<br>
<div class="col s12 center-align">
<a href="formulario_curso.php"  class="waves-effet waves-light btn"><i class="small material-icons">note_add</i>AGREGAR CURSO</a>
<a href="menu_gral.html" class="waves-effet waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>
</div>
</body>
</html>