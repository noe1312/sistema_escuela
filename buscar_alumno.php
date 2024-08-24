<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1 class="col s12 center-align">BUSCAR ALUMNO</h1>
    <div class="row">
    <form method="POST" action="procesa_buscar_alumno.php">
        <div class="row">
            <div class="input-field col s6">
            <i class="material-icons prefix"></i>
            <input type="text" name="txt_idalumno" id="alumno" class="validate">
            <label for="alumno">Ingrese Alumno</label>
            </div>
        </div>
        <div class="col s12 center-align">
        <input type="submit" value="Buscar" class="waves-effect waves-light btn">
    </form>    
    <a href="listado_alumno.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i> AL REGISTRO DE ALUMNOS</a>
    </div>
</body>
</html>