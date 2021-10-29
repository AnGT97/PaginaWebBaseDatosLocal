<?php
#---------------------------------------------------------DUEÑOS-------------------------------------------------------------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Veterinaria";


    $enlace=new mysqli($servername,$username,$password,$dbname);
    if($enlace->connect_error)
    {
       die("No tienes conexion con la base de datos". $enlace->connect_error);
    }
        $id = $_POST['id'];
        $nombre = $_POST['Propietario'];
        $direccion = $_POST['Direccion'];
        $correo = $_POST['Correo'];
        $celular = $_POST['Cel'];
        $telefono = $_POST['Tel'];

        $sql = "UPDATE propietarios SET nombre='$nombre' direccion='$direccion' correo='$correo' celular='$celular' telefono='$telefono' WHERE id=$id";

        ?> 