<?php echo file_get_contents("html/headerLog.html"); ?>
<?php echo file_get_contents("html/LoginVisual.html"); ?>
<?php echo file_get_contents("html/footer.html"); ?>

<?php 
include 'conection.php';
$error = '';

if (isset($_POST['submit'])) {

// obtener los valores del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// crear consulta
$sql = "SELECT * FROM Usuarios WHERE usuario='$username' AND pass='$password'";
// ejecutar consulta
$result = mysqli_query($conn, $sql);

// verificar si la consulta devolvió un resultado
if (mysqli_num_rows($result) > 0) {
   // inicio de sesión exitoso, obtener información del usuario
   $row = mysqli_fetch_assoc($result);
   $cargo = $row['cargo'];

   // redirigir a la página correspondiente según el cargo del usuario
   if ($cargo == 'Administrador') {
    session_start();
    $_SESSION["nombre"] = $row["nombre"];
    $_SESSION["apellido"] = $row["apellido"];
 
    header("Location: Admin.php");

   } elseif ($cargo == 'Usuario') {

    session_start();
    $_SESSION["nombre"] = $row["nombre"];
    $_SESSION["apellido"] = $row["apellido"];
    $_SESSION["id"] = $row["id"];
 
       header("Location: users.php");
   } else {
       echo "Cargo desconocido";
   }
   exit();
} else {
    // credenciales inválidas, mostrar mensaje de error
    echo "Usuario o contraseña incorrectos";
}
}

// cerrar conexión
mysqli_close($conn);

?>
