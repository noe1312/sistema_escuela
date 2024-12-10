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
    <h1 class="col s12 center-align" id="titulo" >FORMULARIO DEL ALUMNO</H1>
        <div class="row">
        <form method="POST" action="../procesa_alumno.php">
            <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix">edit</i>
                <input type="text" name="txt_apellido" id="apellido" class="validate">
                <label for="apellido">Apellido</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">edit</i>
                <input type="text" name="txt_nombre" id="nombre" class="validate">
                <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">insert_invitation</i>
                <input type="date" name="fecha" id="nacimiento" class="validate">
                <label for="nacimiento">Fecha de Nacimiento</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input type="number" name="telefono" id="nacimiento" class="validate">
                <label for="nacimiento">Telefono</label>
            </div>
            
        </div>
        <div class="col s12 center-align">
            <input type="submit" value="Guardar" class="waves-effect waves-light btn">
        </form>    
            <a href="listado_alumno.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>
        </div>
</body>
</html>