<?php
// Iniciar sesión
session_start();

// Eliminar la variable de sesión que almacena la información de usuario actual
unset($_SESSION["nombre"]);
unset($_SESSION["apellido"]);

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("Location: login.php");
exit();
?>