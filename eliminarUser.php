<?php
//llama la conexion
session_start();
include 'conection.php';

// borrar el registro de la tabla alumnos con el id que se pasa por la url
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    //crear la consulta
    $query = "DELETE FROM Usuarios WHERE id = " . $id;
    //ejecutar la consulta
    $result = mysqli_query($conn, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro borrado correctamente";
        //redireccionar a la pagina principal
        header('Location: RegUser.php');
    } else {
        echo "Error al borrar el registro";
    }
}//cerrar la conexion
mysqli_close($con);
?>
