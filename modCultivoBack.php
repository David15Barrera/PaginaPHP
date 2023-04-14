<?php
 session_start();
include 'conection.php';

$idcultivo = $_POST['idcultivo'];
$fechaCosecha = $_POST['fecha'];
$cantidadCosechada = $_POST['cantidad'];
$departamento = $_POST['departamento'];
$metodoCultivo = $_POST['metodo'];
$areaCultivada = $_POST['area'];

if (!empty($fechaCosecha)) {
    // Si la fecha no está vacía, se convierte a formato de MySQL
    $fechaCosecha = date('Y-m-d', strtotime($fechaCosecha));
} else {
    // Si la fecha está vacía, se asigna NULL para evitar el error
    $fechaCosecha = NULL;
}

$sql = "UPDATE Cultivos SET fechaCosecha='$fechaCosecha', cantidadCosechada='$cantidadCosechada', departamento='$departamento', metodoCultivo='$metodoCultivo', areaCultivada='$areaCultivada' WHERE idcultivo=$idcultivo";

if (mysqli_query($conn, $sql)) {
    echo "Los datos se almacenaron correctamente";
    header("Location: VistaUser.php");
} else {
    echo "Error al almacenar los datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
