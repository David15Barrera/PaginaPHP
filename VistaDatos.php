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
        <title>Datos Maiz</title>
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
                    <a href="RegUser.php" class="link">Usuarios</a>
                    <a href="#" class="link">Datos</a>
                    <a href="Admin.php" class="link">Principal</a>  
                    <a href="login.php" class="link link--active">Cerrar</a>
                </div>
            </div>
        </nav>
<br>
<br>
<br>
<br>
<br>
<center><h2 style="color:blueviolet">Informacion de cosechas publicadas</h2></center> 
<br>
<div class="column-table">
            <table>
                <thead>
                    <tr>
                        <th>Fecha Cosecha</th>
                        <th>Cosecha (lb)</th>
                        <th>Departamento</th>
                        <th>Tipo Cultivo</th>
                        <th>Metodo de Cultivo</th>                       
                        <th>Area Cultivada (m2)</th>
                        <th>Agricultor</th>                                                                
                    </tr>
                </thead>
                <tbody>
        <?php
                        include 'conection.php';
                        $sql = "SELECT Cultivos.*, Usuarios.nombre, Usuarios.apellido FROM Cultivos JOIN Usuarios ON Cultivos.idUser = Usuarios.id ORDER BY Cultivos.tipoCultivo ASC";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $row['fechaCosecha'] . "</td>";
                            echo "<td>" . $row['cantidadCosechada'] . "</td>";
                            echo "<td>" . $row['departamento'] . "</td>";
                            echo "<td>" . $row['tipoCultivo'] . "</td>";
                            echo "<td>" . $row['metodoCultivo'] . "</td>";
                            echo "<td>" . $row['areaCultivada'] . "</td>";
                            echo "<td>" . $row['nombre'] ." " .$row['apellido'] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                                 </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <center><h2 style="color:blueviolet">Informacion de relatos cortos publicados</h2></center> 
        <br>
        <div class="column-table">
            <table>
                <thead>
                <tr>
                        <th>Nombre Leyenda</th>
                        <th>Dios</th>
                        <th>Cultura</th>
                        <th>Sobre Nombre</th>
                        <th>Relato</th>                        
                        <th>Escritor</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include 'conection.php';
                        $sql = "SELECT Usuarios.nombre, Usuarios.apellido, Leyendas.* FROM Leyendas INNER JOIN Usuarios ON Leyendas.userId = Usuarios.id;";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $row['nombreLeye'] . "</td>";
                            echo "<td>" . $row['nombreDios'] . "</td>";
                            echo "<td>" . $row['cultura'] . "</td>";
                            echo "<td>" . $row['apodo'] . "</td>";
                            echo "<td class='descripcion'>" . $row['descripcion'] . "</td>";
                            echo "<td>" . $row['nombre'] ." " .$row['apellido'] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                                 </tbody>
            </table>
        </div>

<script type="text/javascript" src="js/login.js"></script>
        </body>
</html>