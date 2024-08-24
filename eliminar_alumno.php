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
    <div class="col s12 center-align">
<?php
include("class/clase_alumno.php");
    $id=$_REQUEST['id'];
    $obj_alumno=new alumno("","","",0);
    $obj_alumno->eliminar($id);
?>
<br>
<a href="listado_alumno.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER AL REGISTRO DE ALUMNOS</a>
</div>