<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" contents="PHP PROYECTO TS1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <title>Admin Maiz</title>
    </head>
    <body>
        <nav class="nav__hero">
            <div class="container nav__container">
                <div class="logo">
                    <?php
                        if(isset($_SESSION["nombre"]) && isset($_SESSION["apellido"])){
                            echo '<h1>Bienvenido(a), ' . $_SESSION["nombre"] . ' ' . $_SESSION["apellido"] . '</h1>';
                        } else {
                            echo '<h1>Bienvenido(a)</h1>';
                        }
                    ?>
                </div>
                <div class="links">
                    <a href="RegUser.php" class="link">Usuarios</a>
                    <a href="VistaDatos.php" class="link">Datos</a>
                    <a href="#" class="link">Principal</a>                    
                    <a href="login.php" class="link link--active">Cerrar</a>
                </div>
            </div>
        </nav>
 
 <div class="welcome-sectionAdmin">
  <div class="backgroundAdmin">
    <div class="overlayAdmin">
      <h1>Ut'z I Petik</h1>
      <p>BIENVENIDO ADMINISTRADOR</p>
             </body>
</html>
