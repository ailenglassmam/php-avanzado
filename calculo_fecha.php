
<?php

if($_POST) {
    
    $dia = $_POST['day'];
    $mes = $_POST['month'];
    $anio = $_POST['year'];
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $fecha_actual=date('d-m-Y');
    $fecha_ingresada= date($dia.'-'.$mes.'-'.$anio);
    $diferencia = strtotime($fecha_ingresada)-strtotime($fecha_actual);

    if ($diferencia <= 0) {
        echo '<h2>Fecha no disponible.</h2> <h3>Han pasado ' .($diferencia/86400). ' días</h3>';
    } elseif ($diferencia >= 0) {
         echo '<h2>Cantidad de días restantes: '.($diferencia/86400).' días</h2>';
    } else {
        echo "<p>Aún no ha realizado la consulta</p>";
    };
};

?>