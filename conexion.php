
<?php
    $servername = "localhost";
    $database = "GodoyHouse";
    $username = "root";
    $password = "";
    
    // Crear conexión
    $conexion = mysqli_connect($servername, $username, $password, $database);
    
    // Comprobar la conexión
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    } 
?>
