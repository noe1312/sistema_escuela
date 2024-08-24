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
 include("class/clase_calificacion.php");

$id=$_REQUEST['idinscripcion'];
 $not1=$_REQUEST['nota1'];
 $not2=$_REQUEST['nota2'];
 $not3=$_REQUEST['nota3'];
 $prom=$_REQUEST['promedio'];

 $obj_calif=new calificaciones($ape,$not1,$not2,$not3,$prom);
 echo '<h3 class="col s12 center-align">MOSTRANDO OBJETO CALIFICACION CREADO:</h3>';
 echo $obj_calif->idinscripcion;
 echo "<br>";
 echo $obj_calif->nota1;
 echo "<br>";
 echo $obj_calif->nota2;
 echo "<br>";
 echo $obj_calif->nota3;
 echo "<br>";
 echo $obj_calif->promedio;
 
 $obj_calif->guardar();
 echo "<br>Calificacion guardado en la Base de Datos";
?>
<a href="listado_calificaciones.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>
</div>
</body>