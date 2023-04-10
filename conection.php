<?php
$servername = "localhost"; // dirección IP del servidor
$username = "root"; // nombre de usuario de la base de datos
$password = "Sistemas1."; // contraseña de la base de datos
$dbname = "mitoMaiz"; // nombre de la base de datos

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}else{
//    echo "Conection a web";
}
?>
