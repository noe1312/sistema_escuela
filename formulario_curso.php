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
    <h1 class="col s12 center-align">FORMULARIO DEL CURSO</h1>
    <div class="row">
    <form method="POST" action="procesa_curso.php" class="col s12">
    <div class="row">
        <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
            <input type="text" name="txt_nombre" id="icon_prefix" class="validate">
            <label for="icon_prefix">Nombre:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">alarm</i>
            <input type="text" name="txt_turno" id="turno" class="validate">
            <label for="turno">Turno</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">home</i>
            <input type="text" name="txt_aula" id="aula" class="validate">
            <label for="aula">Aula</label>
        </div>
    </div>
    <div class="col s12 center-align">
        <input type="submit" value="Guardar" class="waves-effect waves-light btn">
    </form>
    <a href="listado_curso.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>
    </div>
</body>
</html>