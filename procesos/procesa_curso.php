<?php
 include("class/clase_curso.php");
 $nom=$_REQUEST['txt_nombre'];
 $tur=$_REQUEST['txt_turno'];
 $au=$_REQUEST['txt_aula'];
 $obj_curso=new curso($nom,$tur,$au);
 echo "<h3>MOSTRANDO OBJETO CURSO CREADO:</h3>";
 echo $obj_curso->nombre;
 echo "<br>";
 echo $obj_curso->turno;
 echo "<br>";
 echo $obj_curso->aula;
 echo "<br>";
 $obj_curso->guardar();
 echo "<br>Curso guardado en la Base de Datos";
?>
<a href="listado_curso.php">VOLVER</a>