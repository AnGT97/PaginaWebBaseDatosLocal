<?php
#---------------------------------------------------------Mascotas-------------------------------------------------------------------------------
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
        $vacunas = $_POST['vacunas'];
        $FMuer = $_POST['fecha_muerte'];
        $sql = "UPDATE propietarios SET vacunas='$vacunas' fecha_muerte='$Fmuer' WHERE id=$id";

        ?> 