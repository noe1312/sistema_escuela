<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Docentes</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <!-- Compiled and minified CSS -->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Bootstrap -->

    <style>
      #titulo{
        font-family: "Trebuchet MS", Verdana, Tahoma, sans-serif;
      }



    </style>
</head>
<body>
    <h1 class="col s12 center-align" id="titulo">REGISTRO DE DOCENTES</h1>
    <?php
    include("../class/clase_docente.php");
    $obj_docente=new docente("","","");
    $obj_docente->listar();
?>
<br>
<div class="col s12 center-align">
<a href="formulario_docente.php" class="waves-effect waves-light btn"><i class="small material-icons">person_add</i>AGREGAR DOCENTE</a>
<a href="../menu_gral.html" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>
</div>
</body>
<footer>
  &nbsp;
</footer>
</html>