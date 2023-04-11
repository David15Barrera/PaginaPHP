<?php
 session_start();
include 'conection.php';

$nombre = $_POST['nombre'];
$dios = $_POST['Dios'];
$cultura = $_POST['cargo'];
$apodo = $_POST['apodo'];
$descripcion = $_POST['pass'];
$userId = $_SESSION["id"];


$sql = "INSERT INTO Leyendas (userId, nombreLeye, nombreDios, cultura, apodo, descripcion) VALUES ('$userId', '$nombre', '$dios', '$cultura', '$apodo', '$descripcion')";

if (mysqli_query($conn, $sql)) {
    echo "Los datos se almacenaron correctamente";
    header("Location: Historias.php");
} else {
    echo "Error al almacenar los datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
