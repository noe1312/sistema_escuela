<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- Compiled and minified CSS -->
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
            table {
            margin-left: 20px;  
            margin-right: 20px; 
        }
    </style>
</head>
<?php
class curso {
    public $idcurso;
    public $nombre;
    public $turno;
    public $aula;

    public function __construct($nom,$tur,$au)
    {
        $this->nombre=$nom;
        $this->turno=$tur;
        $this->aula=$au;
    }
    
    public function guardar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $cadena='insert into cursos(nombre_curso,turno,aula,iddoc) values ("'.$this->nombre.'","'.$this->turno.'",'.$this->aula.',1)';

        $mysql->query($cadena) or die($mysql->error);

        $mysql->close();
    }

    public function listar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        $cadena="select idcurso,nombre_curso,turno,aula from cursos order by nombre_curso";
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo '<table class="highlight" >';
        echo "<tr><td>AÑO</td><td>TURNO</td><td>AULA</td>";
        while ($reg = $registros->fetch_array()) {
            echo "<tr>";
            echo "<td>".$reg['nombre_curso']."</td>";
            echo "<td>".$reg['turno']."</td>";
            echo "<td>".$reg['aula']."</td>";
            echo '<td><a href="eliminar_curso.php?id='.$reg["idcurso"].'" class="waves-effect waves-light btn"><i class="small material-icons">block</i>Eliminar</a></td>';
            echo "</tr>";
            }
            echo "</table>";
            $mysql->close();
    }
    
}
?>