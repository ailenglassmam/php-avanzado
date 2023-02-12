<?php
// recibir datos del formulario
$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];
//Conectar con la base de datos
include('conexion.php');
// envio la info recibida a la base de datos
mysqli_query($conect_bd, "INSERT INTO clases VALUES(default, '$unidad', '$fecha')");
//Redireccionar a ver_clases.php
header ("Location: unidad1.php?ok#datos_clases");
?>