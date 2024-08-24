<head>

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
class calificaciones {
    public $idcalificacion;
    public $idinscripcion;
    public $nota1;
    public $nota2;
    public $nota3;
    public $promedio;

    public function __construct($id,$not1,$not2,$not3,$prom)
    {
        $this->idinscripcion=$id;
        $this->nota1=$not1;
        $this->nota2=$not2;
        $this->nota3=$not3;
        $this->promedio=$prom;
    }

    public function guardar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $cadena='insert into calificaciones(idcalificacion,idinscripcion,nota1,nota2,nota3,promedio) values (null,"'.$this->nota1.'","'.$this->nota2.'","'.$this->nota3.'","'.$this->promedio.'")';

        $mysql->query($cadena) or die($mysql->error);

        $mysql->close();
    }

    public function listar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
    
        
        $cadena = "SELECT c.idcalificacion, a.apellido, c.nota1, c.nota2, c.nota3, c.promedio 
                   FROM calificaciones c 
                   JOIN inscripciones i ON c.idinscripcion = i.idinscripcion 
                   JOIN alumnos a ON i.idalumno = a.idalumno 
                   ORDER BY a.apellido";
    
        $registros = $mysql->query($cadena) or die($mysql->error);
    
        echo '<table class="highlight">';
        echo "<tr><td>ALUMNO</td><td>NOTA1</td><td>NOTA2</td><td>NOTA3</td><td>PROMEDIO</td><td>ELIMINAR</td></tr>";
    
        while ($reg = $registros->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $reg['apellido'] . "</td>";
            echo "<td>" . $reg['nota1'] . "</td>";
            echo "<td>" . $reg['nota2'] . "</td>";
            echo "<td>" . $reg['nota3'] . "</td>";
            echo "<td>" . $reg['promedio'] . "</td>";
            echo '<td><a href="eliminar_notas.php?id=' . $reg["idcalificacion"] . '" class="waves-effect waves-light btn"><i class="small material-icons">block</i>Eliminar</a></td>';
            echo "</tr>";
        }
    
        echo "</table>";
        $mysql->close();
    }
    

    public function mostrar_notas($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        $cadena="select nota1,nota2,nota3,promedio from calificaciones where idinscripcion=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        
        if ($reg = $registros->fetch_array()) {
            echo "Alumno/a:".$reg[$id];
            echo "<br>Primera Nota:".$reg['nota1'];
            echo "<br>";
            echo "Segunda Nota:".$reg['nota2'];
            echo "<br>";
            echo "Tercera Nota:".$reg['nota3'];
            echo "<br>";
            echo "Promedio:".$reg['promedio'];
            echo "<hr>";
            }
            else
            {
                echo "No se encuentra el registro";
            }
            $mysql->close();
    }  
    public function eliminar($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        $cadena="delete from calificaciones where idcalificacion=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "Se elimino el registro";
        $mysql->close();
    }
}
?>