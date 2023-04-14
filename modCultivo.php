<?php
  session_start();
?>
<?php
    // Recuperar los valores de la URL usando $_GET
    $idcultivo = $_GET['idcultivo'];
    $fechaCosecha = $_GET['fechaCosecha'];
    $cantidadCosechada = $_GET['cantidadCosechada'];
    $departamento = $_GET['departamento'];
    $metodoCultivo = $_GET['metodoCultivo'];
    $areaCultivada = $_GET['areaCultivada'];
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
        <center><h1>Modificar cultivos producidos esta temporada</h1></center>
    <br>
    <section>
    <form action="modCultivoBack.php" method="POST" class="form">
    <input type="hidden" name="idcultivo" value="<?php echo $idcultivo ?>">
    <div class="form-group">
        <label for="fecha">Fecha de la cosecha </label>
        <input type="text" name="fecha" id="fecha" pattern="\d{4}-\d{2}-\d{2}" placeholder="yyyy-mm-dd" value="<?php echo $fechaCosecha ?>" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad cosechada por libra </label>
        <input type="number" name="cantidad" id="cantidad" min="0" value="<?php echo $cantidadCosechada ?>" required>
    </div>
    <div class="form-group">
        <label for="departamento">Departamento</label>
        <select name="departamento" id="departamento">
            <option value="Alta Verapaz" <?php if($departamento == 'Alta Verapaz') echo 'selected'; ?>>Alta Verapaz</option>
            <option value="Baja Verapaz" <?php if($departamento == 'Baja Verapaz') echo 'selected'; ?>>Baja Verapaz</option>
            <option value="Chimaltenango" <?php if($departamento == 'Chimaltenango') echo 'selected'; ?>>Chimaltenango</option>
            <option value="Chiquimula" <?php if($departamento == 'Chiquimula') echo 'selected'; ?>>Chiquimula</option>
            <option value="El Progreso" <?php if($departamento == 'El Progreso') echo 'selected'; ?>>El Progreso</option>
            <option value="Escuintla" <?php if($departamento == 'Escuintla') echo 'selected'; ?>>Escuintla</option>
            <option value="Guatemala" <?php if($departamento == 'Guatemala') echo 'selected'; ?>>Guatemala</option>
            <option value="Huehuetenango" <?php if($departamento == 'Huehuetenango') echo 'selected'; ?>>Huehuetenango</option>
            <option value="Izabal" <?php if($departamento == 'Izabal') echo 'selected'; ?>>Izabal</option>
            <option value="Jalapa" <?php if($departamento == 'Jalapa') echo 'selected'; ?>>Jalapa</option>
            <option value="Jutiapa" <?php if($departamento == 'Jutiapa') echo 'selected'; ?>>Jutiapa</option>
            <option value="Petén" <?php if($departamento == 'Petén') echo 'selected'; ?>>Petén</option>
            <option value="Quetzaltenango" <?php if($departamento == 'Quetzaltenango') echo 'selected'; ?>>Quetzaltenango</option>
            <option value="Quiché" <?php if($departamento == 'Quiché') echo 'selected'; ?>>Quiché</option>
            <option value="Retalhuleu" <?php if($departamento == 'Retalhuleu') echo 'selected'; ?>>Retalhuleu</option>
            <option value="Sacatepéquez" <?php if($departamento == 'Sacatepéquez') echo 'selected'; ?>>Sacatepéquez</option>
            <option value="San Marcos" <?php if($departamento == 'San Marcos') echo 'selected'; ?>>San Marcos</option>
            <option value="Santa Rosa" <?php if($departamento == 'Santa Rosa') echo 'selected'; ?>>Santa Rosa</option>
            <option value="Sololá" <?php if($departamento == 'Sololá') echo 'selected'; ?>>Sololá</option>
            <option value="Suchitepéquez" <?php if($departamento == 'Suchitepéquez') echo 'selected'; ?>>Suchitepéquez</option>
            <option value="Totonicapán" <?php if($departamento == 'Totonicapan') echo 'selected'; ?>>Totonicapán</option>
            <option value="Zacapa"<?php if($departamento == 'Zacapa') echo 'selected'; ?>>Zacapa</option>
    </select>

    </div>
    <div class="form-group">
        <label for="metodo">Metodo de Cultivo</label>
        <input type="text" name="metodo" id="metodo" value="<?php echo $metodoCultivo ?>" required>
    </div>
    <div class="form-group">
        <label for="area">Area Cultivada en metros cuadrados (M2)</label>
        <input type="number" name="area" id="area" step="0.01" value="<?php echo $areaCultivada ?>" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Modificar" onclick="validarCultivos()">
    </div>
    </form>
</section>
<br>

 </body>
</html>