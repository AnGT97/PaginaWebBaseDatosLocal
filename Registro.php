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
        $nombre = $_POST['Propietario'];
        $direccion = $_POST['Direccion'];
        $correo = $_POST['Correo'];
        $celular = $_POST['Cel'];
        $telefono = $_POST['Tel'];

        $sql = "INSERT INTO propietarios VALUES ('','$nombre','$direccion','$correo','$celular','$telefono')";
        

        ?> 