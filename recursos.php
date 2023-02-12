<?php
include("clases/basededatos.php");
include("clases/productos.php");
include("clases/carrito.php");

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('CONTRASENA', '');
define('BASE', 'phpavanzado');

$base = new Basededatos(SERVIDOR, USUARIO, CONTRASENA, BASE);

$productos = new Productos($base);

$carrito = new Carrito($base);

?>