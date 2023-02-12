<?php  
include("recursos.php");

if(isset($_GET['codigo'])) {
    $carrito->eliminar_compra($_GET['codigo']);
}

header("Location:unidad7.php?eliminado");

?>