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
    $nombre = $_POST['nombre']; 
    $nombreD = $_POST['nombreD']; 

    if($nombre!=null) 
    {
    $where = "";
	
	if(!empty($_POST))
	{
		$nombre = $_POST['nombre']; 
		if(!empty($nombre)){
            $where = "WHERE nom_masc LIKE '%$nombre'";
            
        }
    }

    $sql = "SELECT * FROM mascotas $where";
    $resultado = $conn->query($sql);
    
while($row = $resultado->fetch_array(MYSQLI_ASSOC))
        {
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
        }
        
        echo "<a href='ModVac.html' target='_blank'>Modificar</a>"; 
           
    }
   

    if($nombreD!=null && $nombre==null) 
    {
    $where = "";
	
	if(!empty($_POST))
	{
		$nombreD = $_POST['nombreD']; 
		if(!empty($nombre)){
            $where = "WHERE id LIKE '%$nombreD'";
            
        }
    }

    $sql = "SELECT * FROM mascotas $where";
    $resultado = $conn->query($sql);
    
while($row = $resultado->fetch_array(MYSQLI_ASSOC))
        {
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
        }
        echo "<a href='ModVac.html' target='_blank'>Modificar</a>"; 
        }
        $conn->close();
    ?>