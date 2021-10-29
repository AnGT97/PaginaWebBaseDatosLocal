<?php
#---------------------------------------------------------MASCOTAS-------------------------------------------------------------------------------
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
        $mac_id = $_POST['idp'];
        $nombre = $_POST['Nom_Mascota'];
        $tipo = $_POST['Tipo'];
        $sexo = $_POST['Sexo'];
        $fecha_nacimiento = $_POST['Nacimineto'];
        $fecha_muerte = $_POST[''];
        $vacunas = $_POST['Vacunas'];

        $sql = "INSERT INTO mascotas VALUES ('$id','$mac_id','$nombre','$tipo','$sexo','$fecha_nacimiento','','$vacunas')";

        if($enlace->multi_query($sql) === TRUE)
        {
            echo"datos guardados";
        }
        else{
            echo"error". $sql. "<br>" .$enlace->error;
        }
        $enlace->close();
?>