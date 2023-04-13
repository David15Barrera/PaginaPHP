<?php
//llama la conexion
session_start();
include 'conection.php';

// borrar el registro de la tabla alumnos con el id que se pasa por la url
if (isset($_GET["idLeyenda"])) {
    $idLeyenda = $_GET["idLeyenda"];
    //crear la consulta
    $query = "DELETE FROM Leyendas WHERE idLeyenda = " . $idLeyenda;
    //ejecutar la consulta
    $result = mysqli_query($conn, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro borrado correctamente";
        //redireccionar a la pagina principal
        header('Location: VistaDatos.php');
    } else {
        echo "Error al borrar el registro";
    }
}//cerrar la conexion
mysqli_close($con);
?>
