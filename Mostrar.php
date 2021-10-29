<?php
#---------------------------------------------------------Actulizar Vacunas--------------------------------------------------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Veterinaria";


    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
       die("No tienes conexion con la base de datos". $enlace->connect_error);
    }   

    $where= "";
    $sql = "SELECT * FROM propietarios $where";
    $resultado = $conn->query($sql);
    
while($row = $resultado->fetch_array(MYSQLI_ASSOC))
        {
            echo "Propietarios"."<br>";
            echo "Id:"."<br>";
            echo $row['id']."<br>"; 
            echo "Nombre:"."<br>";
            echo $row['nombre']."<br>"; 
            echo "Dirección: "."<br>";
            echo $row['direccion']."<br>"; 
            echo "Correo: "."<br>";
            echo $row['correo']."<br>"; 
            echo "Celular: "."<br>";
            echo $row['celular']."<br>"; 
            echo "Telefono:"."<br>";
            echo $row['telefono']."<br>"; 
            echo "<br>"."<br>";
        }
       
    
        $sql1 = "SELECT * FROM mascotas $where";
        $resultado = $conn->query($sql1);
    
while($row = $resultado->fetch_array(MYSQLI_ASSOC))
        {
            echo "Mascotas"."<br>";
            echo "Id :"."<br>";
            echo $row['id']."<br>"; 
            echo "Id Mascota:"."<br>";
            echo $row['mac_id']."<br>"; 
            echo "Nombre mascota: "."<br>";
            echo $row['nom_masc']."<br>"; 
            echo "Tipo: "."<br>";
            echo $row['tipo']."<br>"; 
            echo "sexo: "."<br>";
            echo $row['sexo']."<br>"; 
            echo "Fecha Nacimineto:"."<br>";
            echo $row['fecha_nacimiento']."<br>"; 
            echo "Fecha Muerte:"."<br>";
            echo $row['fecha_muerte']."<br>";
            echo "Vacunas:"."<br>";
            echo $row['vacunas']."<br>";
            echo "<br>"."<br>";
        }
        $conn->close();
    ?>