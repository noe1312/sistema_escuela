<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda del alumno</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
        h1 {
            font-family: "Trebuchet MS", Verdana, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <h1 class="col s12 center-align">RESULTADO DE LA BUSQUEDA</H1>
<?php
    include("class/clase_alumno.php");
    $id=$_REQUEST['txt_idalumno'];
    $obj_alumno=new alumno("","","",0);
    $obj_alumno->mostrar_alumno($id);
?>
<div class="col s12 center-align">
    <a href="buscar_alumno.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>    
</div>
</body>
</html>