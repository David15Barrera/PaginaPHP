<?php
  session_start();
?>
<?php
    // Recuperar los valores de la URL usando $_GET
    $idLeyenda = $_GET['idLeyenda'];
    $nombreLeye = $_GET['nombreLeye'];
    $nombreDios = $_GET['nombreDios'];
    $cultura = $_GET['cultura'];
    $apodo = $_GET['apodo'];
    $descripcion = $_GET['descripcion'];
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
                    <a href="VistaUser.php" class="link">Cancelar</a>  
                    <a href="CerrarSesion.php" class="link link--active">Cerrar</a>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h1>Modificar relato corto de la mitologia del maiz</h1></center>
      <br>
      <form action="ModRelatoBack.php" method="POST" id="historia-form">
      <input type="hidden" name="idLeyenda" value="<?php echo $idLeyenda ?>">
      <div class="form-group">
          <label for="nombre">Nombre de la Historia:</label>
          <input type="text" name="nombre" id="nombre" value="<?php echo $nombreLeye ?>" require>
        </div>
        <div class="form-group">
          <label for="Dios">Dios mencionado:</label>
          <input type="text" name="Dios" id="Dios" value="<?php echo $nombreDios ?>" require>
        </div>
        <div class="form-group">
          <label for="cultura">Cultura:</label>
          <select name="cargo" id="cargo">
            <option value="Maya" <?php if ($cultura == 'Maya') echo 'selected' ?>>Maya</option>
            <option value="Azteca" <?php if ($cultura == 'Azteca') echo 'selected' ?>>Azteca</option>
            <option value="Inca" <?php if ($cultura == 'Inca') echo 'selected' ?>>Inca</option>
        </select>
        </div>
        <div class="form-group">
          <label for="apodo">Sobre Nombre:</label>
          <input type="text" name="apodo" id="apodo" value="<?php echo $apodo ?>" require>

        </div>
        <div class="form-group">
          <label for="pass">Relato:</label>
          <textarea name="pass" id="pass" required><?php echo $descripcion; ?></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Modificar" onclick="validarHistorias()">
        </div>
      </form>
        </body>
</html>