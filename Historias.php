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
        <link rel="stylesheet" href="css/styleProd.css" type="text/css">
        <script src="js/login.js"></script>        
        <title>Relato Maiz</title>
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
                    <a href="#" class="link">Historia</a>
                    <a href="VistaProd.php" class="link">Cultivos</a>
                    <a href="users.php" class="link">Principal</a>  
                    <a href="login.php" class="link link--active">Cerrar</a>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h1>Escribir relato corto hacerca de la mitologia del maiz</h1></center>
      <br>
      <form action="RegHistoria.php" method="POST" id="historia-form">
        <div class="form-group">
          <label for="nombre">Nombre de la Historia:</label>
          <input type="text" name="nombre" id="nombre" require>
        </div>
        <div class="form-group">
          <label for="Dios">Dios mencionado:</label>
          <input type="text" name="Dios" id="Dios" require>
        </div>
        <div class="form-group">
          <label for="cultura">Cultura:</label>
          <select name="cargo" id="cargo">
            <option value="Maya">Maya</option>
            <option value="Azteca">Azteca</option>
            <option value="Inca">Inca</option>
          </select>
        </div>
        <div class="form-group">
          <label for="apodo">Sobre Nombre:</label>
          <input type="text" name="apodo" id="apodo">
        </div>
        <div class="form-group">
          <label for="pass">Descripcion:</label>
          <textarea name="pass" id="pass" require></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Agregar" onclick="validarHistorias()">
        </div>
      </form>
        </body>
</html>