<?php
#---------------------------------------------------------Actulizar Dueños--------------------------------------------------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Veterinaria";


    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
       die("No tienes conexion con la base de datos". $enlace->connect_error);
    }   
    $nombre = $_POST['nombre']; 
    $correo = $_POST['correo']; 

    if($nombre!=null) 
    {
    $where = "";
	
	if(!empty($_POST))
	{
		$nombre = $_POST['nombre']; 
		if(!empty($nombre)){
            $where = "WHERE nombre LIKE '%$nombre'";
            
        }
    }

    $sql = "SELECT * FROM propietarios $where";
    $resultado = $conn->query($sql);
    
while($row = $resultado->fetch_array(MYSQLI_ASSOC))
        {
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
        }
        
        echo "<a href='Modificar.html' target='_blank'>Modificar</a>"; 
           
    }
   

    if($correo!=null && $nombre==null) 
    {
    $where = "";
	
	if(!empty($_POST))
	{
		$correo = $_POST['correo']; 
		if(!empty($nombre)){
            $where = "WHERE correo LIKE '%$correo'";
            
        }
    }

    $sql = "SELECT * FROM propietarios $where";
    $resultado = $conn->query($sql);
    
while($row = $resultado->fetch_array(MYSQLI_ASSOC))
        {
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
        }
        echo "<a href='Modificar.html' target='_blank'>Modificar</a>"; 
        }
        $conn->close();
    ?>