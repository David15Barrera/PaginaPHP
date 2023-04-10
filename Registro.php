<?php echo file_get_contents("html/headerLog.html"); ?>
<?php echo file_get_contents("html/Registro.html"); ?>
<?php echo file_get_contents("html/footer.html"); ?>

<?php
include 'conection.php';

if(empty($_POST["nombre"])|| empty($_POST["Name"])|| empty($_POST["pass"]) || empty($_POST["apellido"])) {
    echo "El campo nombre es obligatorio";
 
}else{
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtiene los valores del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["Name"];
    $pass = $_POST["pass"];
    // Inserta los valores en la tabla de MySQL
    $sql = "INSERT INTO Usuarios (nombre, apellido, usuario, pass, cargo) VALUES ('$nombre', '$apellido', '$usuario', '$pass', 'Usuario')";
    if ($conn->query($sql) === TRUE) {
      echo "Registro exitoso";
    } else {
      echo "Error al registrar: " . $conn->error;
      
    }
  
    // Cierra la conexión
    $conn->close();
  }
  
}
?>
