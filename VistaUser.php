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
        <link rel="stylesheet" href="css/styleHis.css" type="text/css">
        <title>Usuario Maiz</title>
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
                    <a href="#" class="link">Compartido</a>
                    <a href="Historias.php" class="link">Historia</a>
                    <a href="VistaProd.php" class="link">Cultivos</a>
                    <a href="users.php" class="link">Principal</a>                    
                    <a href="CerrarSesion.php" class="link link--active">Cerrar</a>
                </div>
            </div>
        </nav>
        </body>
        <br>
        <br>
        <br>
        <br>
        <div class="column-table">
         <center><h2>Relatos Cortos Compartidos</h2></center> 
         <br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Leyenda</th>
                        <th>Dios</th>
                        <th>Cultura</th>
                        <th>Sobre Nombre</th>
                        <th>Descripcion</th>                        
                        <th>Acción</th>                        
                    </tr>
                </thead>
                <tbody>
        <?php
                        include 'conection.php';
                        $sql = "SELECT * FROM Leyendas WHERE userId =". $_SESSION["id"];
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $row['idLeyenda'] . "</td>";
                            echo "<td>" . $row['nombreLeye'] . "</td>";
                            echo "<td>" . $row['nombreDios'] . "</td>";
                            echo "<td>" . $row['cultura'] . "</td>";
                            echo "<td>" . $row['apodo'] . "</td>";
                            echo "<td class='descripcion'>" . $row['descripcion'] . "</td>";
                            echo "<td><a class='btnAccU' href='ModRelato.php?idLeyenda=" . $row['idLeyenda'] . "&nombreLeye=" . $row['nombreLeye'] . "&nombreDios=" . $row['nombreDios'] . "&cultura=" . $row['cultura'] . "&apodo=" . $row['apodo'] . "&descripcion=" . $row['descripcion'] . "'>Modificar</a>";                            
                            echo "</tr>";
                        }
                    ?>
                                 </tbody>
            </table>
        </div>
        <br>
        <br>
        <center><h2>Registro de Cultivos</h2></center> 
<br>
<div class="column-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha Cosecha</th>
                        <th>Cantidad (lb)</th>
                        <th>Departamento</th>
                        <th>Tipo Cultivo</th>
                        <th>Metodo de Cultivo</th>                       
                        <th>Area Cultivada (m2)</th>
                        <th>Acción</th>                                        
                    </tr>
                </thead>
                <tbody>
        <?php
                        include 'conection.php';
                        $sql = "SELECT * FROM Cultivos WHERE idUser =". $_SESSION["id"];
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" . $row['idcultivo'] . "</td>";
                            echo "<td>" . $row['fechaCosecha'] . "</td>";
                            echo "<td>" . $row['cantidadCosechada'] . "</td>";
                            echo "<td>" . $row['departamento'] . "</td>";
                            echo "<td>" . $row['tipoCultivo'] . "</td>";
                            echo "<td>" . $row['metodoCultivo'] . "</td>";
                            echo "<td>" . $row['areaCultivada'] . "</td>";
                            echo "<td><a class='btnAccU' href='modCultivo.php?idcultivo=" . $row['idcultivo'] . "&fechaCosecha=" . $row['fechaCosecha'] . "&cantidadCosechada=" . $row['cantidadCosechada'] . "&departamento=" . $row['departamento'] . "&metodoCultivo=" . $row['metodoCultivo'] . "&areaCultivada=" . $row['areaCultivada'] . "'>Modificar</a>";                                                        
                            echo "</tr>";
                        }
                    ?>
                                 </tbody>
            </table>
        </div>
        <br>
        <br>
    </body>
</html>
