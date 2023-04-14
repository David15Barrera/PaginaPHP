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
            <title>Cosecha Maiz</title>
        <style>
	</style>
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
                <a href="VistaUser.php" class="link">Compartido</a>
                <a href="Historias.php" class="link">Historias</a>    
                    <a href="#" class="link">Cultivos</a>
                    <a href="users.php" class="link">Principal</a>  
                    <a href="CerrarSesion.php" class="link link--active">Cerrar</a>
                </div>
            </div>
        </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1>Ingresa los cultivos producidos esta temporada</h1></center>
    <br>
    <section>
    <form action="RegProd.php" method="POST" class="form">
    <div class="form-group">
        <label for="fecha">Fecha de la cosecha</label>
        <input type="text" name="fecha" id="fecha" pattern="\d{4}-\d{2}-\d{2}" placeholder="yyyy-mm-dd" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad cosechada por libra</label>
        <input type="number" name="cantidad" id="cantidad" min="0" required>
    </div>
    <div class="form-group">
        <label for="departamento">Departamento</label>
        <select name="departamento" id="departamento">
            <option value="Alta Verapaz">Alta Verapaz</option>
            <option value="Baja Verapaz">Baja Verapaz</option>
            <option value="Chimaltenango">Chimaltenango</option>
            <option value="Chiquimula">Chiquimula</option>
            <option value="El Progreso">El Progreso</option>
            <option value="Escuintla">Escuintla</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Huehuetenango">Huehuetenango</option>
            <option value="Izabal">Izabal</option>
            <option value="Jalapa">Jalapa</option>
            <option value="Jutiapa">Jutiapa</option>
            <option value="Petén">Petén</option>
            <option value="Quetzaltenango">Quetzaltenango</option>
            <option value="Quiché">Quiché</option>
            <option value="Retalhuleu">Retalhuleu</option>
            <option value="Sacatepéquez">Sacatepéquez</option>
            <option value="San Marcos">San Marcos</option>
            <option value="Santa Rosa">Santa Rosa</option>
            <option value="Sololá">Sololá</option>
            <option value="Suchitepéquez">Suchitepéquez</option>
            <option value="Totonicapán">Totonicapán</option>
            <option value="Zacapa">Zacapa</option>
    </select>
        </select>
    </div>
    <div class="form-group">
        <label for="metodo">Metodo de Cultivo</label>
        <input type="text" name="metodo" id="metodo" required>
    </div>
    <div class="form-group">
        <label for="area">Area Cultivada en metros cuadrados (M2)</label>
        <input type="number" name="area" id="area" step="0.01" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Agregar" onclick="validarCultivos()">
    </div>
    </form>
</section>
<br>
       <br>
        <br>
    </body>
</html>