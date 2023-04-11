<?php
 session_start();
 include 'conection.php';
// Obtener los valores del formulario
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$departamento = $_POST['departamento'];
$metodo = $_POST['metodo'];
$area = $_POST['area'];
$idUser = $_SESSION['id'];

// Construir la consulta SQL de inserción
$sql = "INSERT INTO Cultivos (idUser, fechaCosecha, cantidadCosechada, departamento, tipoCultivo, metodoCultivo, areaCultivada) 
        VALUES ('$idUser', '$fecha', '$cantidad', '$departamento', 'Maiz', '$metodo', '$area')";

// Ejecutar la consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "Los datos se almacenaron correctamente";
    header("Location: VistaProd.php");
} else {
    echo "Error al almacenar los datos: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>