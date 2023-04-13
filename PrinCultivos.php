<?php echo file_get_contents("html/headerLog.html"); ?>
<br>
<br>
<div class="welcome-section">
  <div class="background">
    <div class="overlay">
      <h1>Metodos del Cultivo del Maíz</h1>
      <p>Proceso en como la cultura Maya cultivaban Maíz</p>
      <div class="button-container">
  <a href="#Registro"><button>Cosechas en Guatemala</button></a>
</div>
    </div>
  </div>
</div>
<div class="containerPreMaiz">
  <h2 class="titleM">La cultura maya y el cultivo del maíz</h2>
  <div class="sectionM">
    <p class="textM">La cultura maya es conocida por su desarrollo agrícola, especialmente por su habilidad en el cultivo del maíz. Durante siglos, los mayas han utilizado técnicas de cultivo eficientes y sostenibles para garantizar una cosecha abundante y de alta calidad. Estos métodos de cultivo han sido transmitidos de generación en generación, y aún se practican en algunas comunidades mayas en la actualidad.</p>
  </div>
  <div class="sectionM">
    <h3 class="subtitleM">Preparación del terreno</h3>
    <p class="textM">El cultivo del maíz en la cultura maya comenzaba con la preparación del terreno. Los agricultores mayas cortaban y quemaban la vegetación en el área de cultivo, lo que permitía que las cenizas se mezclaran con la tierra y proporcionaran nutrientes. Luego, el suelo era arado con herramientas de madera, como el coa, un palo con un extremo puntiagudo y curvo que se utilizaba para hacer surcos en la tierra.</p>
  </div>
  <div class="sectionM">
    <h3 class="subtitleM">Técnica de la milpa</h3>
    <p class="textM">Después de preparar el terreno, se sembraba el maíz. Los mayas utilizaban una técnica llamada "milpa", que consistía en sembrar maíz, frijoles y calabaza juntos en el mismo campo. Los frijoles y la calabaza proporcionaban sombra y ayudaban a retener la humedad del suelo, mientras que el maíz crecía alto y actuaba como soporte para las enredaderas de los frijoles.</p>
  </div>
  <div class="sectionM">
    <h3 class="subtitleM">Sistema de riego y control de plagas</h3>
    <p class="textM">Una vez sembrado, el maíz se regaba con agua y se esperaba a que creciera. Los mayas utilizaban un sistema de riego ingenioso que involucraba canales de agua y pequeñas presas hechas de piedra para dirigir el agua hacia los campos. También controlaban el nivel de agua en el suelo mediante la creación de pequeñas terrazas o montículos en los campos, lo que permitía que el agua se infiltrara lentamente en el suelo y evitaba que se perdiera a través de la escorrentía.</p>
    <p class="textM">Durante el crecimiento del maíz, los agricultores mayas también controlaban las malezas y las plagas. En lugar de utilizar pesticidas y herbicidas químicos, utilizaban técnicas naturales como el cultivo intercalado y la rotación de cultivos. También utilizaban plantas y hierbas medicinales para controlar las plagas y promover el crecimiento saludable del maíz.</p>
  </div>
  <div class="sectionM">
    <h3 class="subtitleM">Cosecha</h3>
    <p class="textM">Una vez que el maíz estaba listo para ser cosechado, los agricultores mayas cortaban las mazorcas y las colgaban al sol para que se secaran. Luego, retiraban los granos de maíz de las mazorcas y los almacenaban en recipientes de barro para su uso futuro.</p>
    <p class="textM" id="Registro">El cultivo del maíz era una actividad central en la cultura maya, y tenía un gran valor social, económico y religioso. Los mayas celebraban la cosecha del maíz con ceremonias religiosas y festivales que agradecían a los dioses por la abundancia de alimentos. A través de estos rituales, se honraba el maíz como una fuente sagrada de vida y nutrición. </p>
  </div>
</div>
<center><h2 class="nom">Registro de Cultivos en Guatemala</h2></center>
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
<?php echo file_get_contents("html/footer.html"); ?>