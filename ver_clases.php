<!--Mostrar el contenido de la tabla "clases"-->
    <?php
        //conecto con la base de datos
        include("conexion.php");
        //consulto los datos dentro de la tabla. Es decir, traigo la información
        $clases = mysqli_query($conect_bd, "SELECT * FROM clases ORDER BY fecha");
        //separo los datos con un array >> $lista_clases y lo incluyo en un bucle >> while para que repita la estructura tantas veces necesite (va a depender de la cantidad de datos cargados en la base de datos)
        while ($lista_clases = mysqli_fetch_assoc($clases)) {
    ?>
<!--estructura que el while va a repetir. incluyo con estructura php la info a linkear-->
    <div class="clases">
        <h4>Unidad: <?php echo $lista_clases['unidad']?></h4>
        <hr>
        <p>Fecha: <?php echo $lista_clases['fecha']?></p> 
        </div><br>
        <!--cierro la llave del while-->
    <?php } ?>
