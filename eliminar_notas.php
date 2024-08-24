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
    
<?php
include("class/clase_calificacion.php");
    $id=$_REQUEST['id'];
    $obj_calif=new calificaciones(0,0,0,0);
    $obj_calif->eliminar($id);
?>
<br>
<a href="listado_notas.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER AL REGISTRO DE NOTAS</a>