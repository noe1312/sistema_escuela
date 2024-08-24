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
class docente {
    public $iddocente;
    public $apellido;
    public $nombre;
    public $mail;

    public function __construct($ap,$nom,$mail)
    {
        $this->apellido=$ap;
        $this->nombre=$nom;
        $this->mail=$mail;
    }
    
    public function guardar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $cadena='insert into docentes(iddocente,apellido,nombre,mail) values (null,"'.$this->apellido.'","'.$this->nombre.'",'.$this->mail.',1)';

        $mysql->query($cadena) or die($mysql->error);

        $mysql->close();
    }
    public function listar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        $cadena="select iddocente,apellido,nombre,mail from docentes order by apellido";
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo '<table class="highlight" >';
        echo "<tr><td>APELLIDO</td><td>NOMBRE</td><td>MAIL</td>";
        while ($reg = $registros->fetch_array()) {
            echo "<tr>";
            echo "<td>".$reg['apellido']."</td>";
            echo "<td>".$reg['nombre']."</td>";
            echo "<td>".$reg['mail']."</td>";
            echo '<td><a href="eliminar_docente.php?id='.$reg["iddocente"].'" class="waves-effect waves-light btn"><i class="small material-icons">block</i>Eliminar</a></td>';
            echo "</tr>";
            }
            echo "</table>";
            $mysql->close();
    }
    public function eliminar($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela");
        $cadena="delete from docente where iddocente=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "Se elimino el registro";
        $mysql->close();
    }
}
    

?>