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
        <link rel="stylesheet" href="css/styleUs.css" type="text/css">        
        <title>Registrar Maiz</title>
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
                    <a href="#" class="link">Usuarios</a>
                    <a href="VistaDatos.php" class="link">Datos</a>
                    <a href="Admin.php" class="link">Principal</a>  
                    <a href="login.php" class="link link--active">Cerrar</a>
                </div>
            </div>
        </nav>
<br>
<br>
<br>
<br>
<div class="container">
        <div class="column-form">
           <center><h2>Agregar usuario</h2></center> 
            <br>
            <form action="RegUserBack.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
                <br>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido">
                <br>
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario">
                <br>
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" id="pass">
                <br>
                <label for="cargo">Cargo:</label>
                <select name="cargo" id="cargo">
                    <option value="Administrador">Administrador</option>
                    <option value="Usuario">Usuario</option>
                </select>
                <br>
                <input type="submit" value="Agregar" onclick="validar()">
            </form>
        </div>
         <div class="column-table">
         <center><h2>Usuarios Registrados</h2></center> 
         <br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Cargo</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conection.php';
                        $sql = "SELECT * FROM Usuarios";
                        $result = mysqli_query($conn, $sql);
                        $_SESSION["id"] = $row["id"];
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['apellido'] . "</td>";
                            echo "<td>" . $row['usuario'] . "</td>";
                            echo "<td>" . $row['cargo'] . "</td>";
                            echo "<td><button class='btnAcc' onclick='eliminarUser(" . $row['id'] . ")'>Eliminar</button>";
                            echo "</tr>";
                            $_SESSION["id"] = $row["id"];
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
        </body>
</html>