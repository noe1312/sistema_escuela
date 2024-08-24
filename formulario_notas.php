<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Notas</title>
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
    <h1 class="col s12 center-align" id="titulo" >FORMULARIO NOTAS</H1>
        <div class="row">
        <form method="POST" action="procesa_notas.php">
        <input type="hidden" name="idalumno" value="<?php echo $idalumno; ?>">
        
            <div class="input-field col s6">
                <i class="material-icons prefix">chrome_reader_mode</i>
                <input type="number" name="nota1" id="nacimiento" class="validate">
                <label for="nacimiento">Primera Nota</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">chrome_reader_mode</i>
                <input type="number" name="nota2" id="nacimiento" class="validate">
                <label for="nacimiento">Segunda Nota</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">chrome_reader_mode</i>
                <input type="number" name="nota3" id="nacimiento" class="validate">
                <label for="nacimiento">Tercera Nota</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">collections_bookmark</i>
                <input type="number" name="promedio" id="nacimiento" class="validate">
                <label for="nacimiento">Promedio</label>
            </div>
        </div>
        <div class="col s12 center-align">
            <input type="submit" value="Guardar" class="waves-effect waves-light btn">
        </form>    
            <a href="listado_notas.php" class="waves-effect waves-light btn"><i class="small material-icons">keyboard_return</i>VOLVER</a>
        </div>
</body>
</html>