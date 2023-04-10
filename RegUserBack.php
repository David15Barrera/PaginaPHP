<?php
include 'conection.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$cargo = $_POST['cargo'];


$sql = "INSERT INTO Usuarios (nombre, apellido, usuario, pass, cargo) VALUES ('$nombre', '$apellido', '$usuario', '$pass', '$cargo')";
if(mysqli_query($conn, $sql)){
    echo "Usuario agregado correctamente.";
    header("Location: RegUser.php");

} else{
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
