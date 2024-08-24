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
class alumno {
    public $idalumno;
    public $apellido;
    public $nombre;
    public $fecha_nacimiento;
    public $telefonopadre;

    public function __construct($ape,$nom,$fec,$tel)
    {
        $this->apellido=$ape;
        $this->nombre=$nom;
        $this->fecha_nacimiento=$fec;
        $this->telefonopadre=$tel;
    }

    public function guardar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $cadena='insert into alumnos(idalumno,apellido,nombre) values (null,"'.$this->apellido.'","'.$this->nombre.'")';

        $mysql->query($cadena) or die($mysql->error);

        $mysql->close();
    }

    public function listar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        $cadena="select idalumno,apellido,nombre,sexo,provincia from alumnos order by apellido";
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo '<table class="highlight">';
        echo "<tr><td>APELLIDO</td><td>NOMBRE</td><td>SEXO</td><td>PROVINCIA</td><td>ELIMINAR</td></tr>";
        while ($reg = $registros->fetch_array()) {
            echo "<tr>";
            echo "<td>".$reg['apellido']."</td>";
            echo "<td>".$reg['nombre']."</td>";
            echo "<td>".$reg['sexo']."</td>";
            echo "<td>".$reg['provincia']."</td>";
            echo '<td><a href="eliminar_alumno.php?id='.$reg["idalumno"].'" class="waves-effect waves-light btn"><i class="small material-icons">block</i>Eliminar</a></td>';
            echo "</tr>";
            }
            echo "</table>";
            $mysql->close();
    }
    public function mostrar_alumno($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        $cadena="select idalumno,apellido,nombre,sexo,provincia from alumnos where idalumno=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        if ($reg = $registros->fetch_array()) {
            echo "Idalumno:".$reg['idalumno'];
            echo "<br>Apellido:".$reg['apellido'];
            echo "<br>";
            echo "Nombre:".$reg['nombre'];
            echo "<br>";
            echo "Sexo:".$reg['sexo'];
            echo "<br>";
            echo "Provincia:".$reg['provincia'];
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
        $cadena="delete from alumnos where idalumno=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "Se elimino el registro";
        $mysql->close();
    }
}
?>