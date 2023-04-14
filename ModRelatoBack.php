<?php
 session_start();
include 'conection.php';

$nombre = $_POST['nombre'];
$dios = $_POST['Dios'];
$cultura = $_POST['cargo'];
$apodo = $_POST['apodo'];
$descripcion = $_POST['pass'];
$idLeyenda = $_POST['idLeyenda'];

$sql ="UPDATE Leyendas SET nombreLeye='$nombre', nombreDios='$dios', cultura='$cultura', apodo='$apodo', descripcion='$descripcion' WHERE idLeyenda='$idLeyenda'";

if (mysqli_query($conn, $sql)) {
    echo "Los datos se almacenaron correctamente";
    header("Location: users.php");
} else {
    echo "Error al almacenar los datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
