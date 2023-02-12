<?php 
include("recursos.php");

if(isset($_GET['codigo'])) {
    $carrito->introducir_compra($_GET['codigo'], $_GET['producto'], $_GET['descripcion'], $_GET['precio']);
}

header("Location: unidad7.php?cargado");

?>