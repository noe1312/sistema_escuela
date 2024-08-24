<!DOCTYPE html>
<html lang="en">
<head>
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
        #titulo {
            font-family: "Trebuchet MS", Verdana, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
<div class="col s12 center align">
<?php
 include("class/clase_alumno.php");
 $ape=$_REQUEST['txt_apellido'];
 $nom=$_REQUEST['txt_nombre'];
 $fecha_nacimiento=$_REQUEST['fecha'];
 $telefonopadre=$_REQUEST['telefono'];

 $obj_alumno=new alumno($ape,$nom,$fecha_nacimiento,$telefonopadre);
 echo '<h3 class="col s12 center-align">MOSTRANDO OBJETO ALUMNO CREADO:</h3>';
 echo $obj_alumno->apellido;
 echo "<br>";
 echo $obj_alumno->nombre;
 echo "<br>";
 echo $obj_alumno->fecha_nacimiento;
 echo "<br>";
 echo $obj_alumno->telefonopadre;
 
 $obj_alumno->guardar();
 echo "<br>Alumno guardado en la Base de Datos";
?>
<a href="listado_alumno.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>
</div>
</body>