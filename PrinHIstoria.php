<?php echo file_get_contents("html/headerLog.html"); ?>
<br>
    <div class="welcome-section">
        <div class="backgroundHis">
            <div class="overlay">
            <h1>Historia del Maíz</h1>
            <p>El maíz, centro de la cultura Maya</p>
            <div class="button-container">
        <a href="#Registro"><button>Relatos de los Dioses</button></a>
        </div>
     </div>
    </div>
</div>
<div class="article">
  <h1>El maíz en la cultura Maya</h1>
  <p>El maíz ha sido un cultivo fundamental en la cultura maya desde hace más de 4,000 años. Para los mayas, el maíz era más que solo un alimento, era considerado una deidad y una fuerza vital para la supervivencia de su civilización. El maíz fue un alimento fundamental para la cultura maya, y como tal, fue venerado como un regalo de los dioses. En la mitología maya cuenta varias historias sobre la creación del maíz y sus dioses.</p>
  <p><img class="imgN" src="img/MayaMaiz.jpg" alt="Imagen de maíz en la cultura Maya"> Se cree que los mayas fueron los primeros en cultivar maíz de forma intensiva y desarrollaron técnicas avanzadas de cultivo y selección de semillas. Se han encontrado restos de maíz en antiguas ruinas mayas, lo que indica que el maíz fue una parte integral de su dieta.</p>
  <p>Los mayas desarrollaron técnicas avanzadas de cultivo en las tierras bajas y en las tierras altas. En las tierras bajas, los mayas construyeron campos elevados que estaban rodeados por canales de agua para mantener el suelo húmedo. En las tierras altas, los mayas cultivaban en terrazas para aprovechar la poca tierra disponible en las laderas de las montañas.</p>
  <p>Los mayas también utilizaron técnicas de selección de semillas para desarrollar variedades de maíz con diferentes colores, tamaños y sabores. Algunas variedades de maíz se utilizaron para hacer tortillas, mientras que otras se usaban para hacer bebidas alcohólicas como el chicha.</p>
  <p>El maíz también jugó un papel importante en la economía maya, ya que se usaba como moneda de cambio en las transacciones comerciales. Los mayas intercambiaban maíz por otros productos como sal, algodón y jade.</p>
  <p>Hoy en día, el maíz sigue siendo un cultivo fundamental en la cultura y la economía de las comunidades mayas en México, Guatemala, Belice, Honduras y El Salvador. Se sigue utilizando en la alimentación y en ceremonias religiosas, y la técnica de selección de semillas se ha transmitido de generación en generación.</p>
</div>

<div class="article">
  <h1>El maíz en la cultura Azteca</h1>
  <p>El maíz era un alimento muy importante en la cultura azteca, y estaba estrechamente relacionado con sus creencias religiosas y mitológicas. Los aztecas creían que el maíz había sido creado por los dioses y que era un regalo divino para la humanidad. Además de su importancia como alimento básico, el maíz también era utilizado en rituales y ceremonias religiosas.</p>
  <p><img class="imgN" src="img/MaizDios.png" alt="Imagen de maíz en la cultura Azteca">Según la mitología azteca, el dios Quetzalcóatl había robado el maíz de los dioses y lo había dado a los hombres para que lo cultivaran y lo consumieran. La diosa Xilonen era la diosa del maíz y era adorada por los agricultores y campesinos, quienes le ofrecían sacrificios y oraciones para asegurar una buena cosecha.</p>
  <p>Los aztecas utilizaban técnicas avanzadas de cultivo, como la agricultura en terrazas y la irrigación, para asegurarse de que sus cultivos de maíz prosperaran en el clima árido de Mesoamérica. También desarrollaron variedades específicas de maíz para adaptarse a diferentes condiciones de cultivo.</p>
  <p>La importancia del maíz en la cultura azteca se reflejaba en la sociedad misma. Los agricultores y campesinos eran considerados una parte fundamental de la sociedad, y su labor en la producción de maíz era valorada y respetada. Además, los guerreros aztecas se hacían llamar "los comedores de maíz", lo que reflejaba la importancia del alimento en la cultura militar.</p>
  <p>En resumen, el maíz era un alimento y un elemento central en la religión, la economía y la sociedad de la cultura azteca. La importancia del maíz en la vida diaria de los aztecas muestra la complejidad y la riqueza de su cultura y su capacidad para adaptarse y prosperar en un entorno desafiante.</p>
</div>

<div class="article">
  <h1>El maíz en la cultura Inca</h1>
  <p>El maíz también fue una cultura fundamental para los Incas, quienes lo consideraban una planta sagrada y lo cultivaban en grandes cantidades. Los incas creían que el maíz era una creación de su dios sol, Inti, y que su cultivo estaba destinado a alimentar a la población. El maíz era una de las principales fuentes de alimento para los incas y su cultivo era una tarea sagrada que estaba a cargo de los sacerdotes. Para los incas, el maíz era un alimento sagrado que se ofrecía a los dioses y se usaba en ceremonias religiosas.</p>
  <p><img class="imgN" src="img/IncaDios.jpg" alt="Imagen de maíz en la cultura Azteca">Además, los incas desarrollaron una técnica avanzada de cultivo llamada terrazas, que consistía en la construcción de terrazas escalonadas en las laderas de las montañas para cultivar maíz y otros cultivos en las regiones montañosas de los Andes. También desarrollaron sistemas avanzados de riego y almacenamiento de agua para el cultivo del maíz.</p>
  <p>El maíz era un alimento tan importante en la cultura Inca que incluso se utilizaba como moneda y se intercambiaba por otros bienes. Los incas también utilizaron el maíz en la producción de chicha, una bebida alcohólica hecha de maíz fermentado que se utilizaba en ceremonias religiosas y fiestas.</p>
  <p id="Registro"></p>
  <p>En la mitología inca, el maíz también tenía un papel importante. Según la leyenda, el primer hombre y la primera mujer fueron creados a partir de granos de maíz dorado y, por lo tanto, el maíz era considerado una fuente de vida y fertilidad. También se creía que el dios de la fertilidad, Pachamama, protegía el cultivo del maíz y se le ofrecían ofrendas en su honor durante las ceremonias de siembra y cosecha.</p>
</div>

<center><h2 class="nom">Relatos de las diferentes culturas sobre el Maiz</h2></center>
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
        <br>
        <br>

<?php echo file_get_contents("html/footer.html"); ?>