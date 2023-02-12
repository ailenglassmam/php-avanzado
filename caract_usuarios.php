<?php
//genero un script donde coloco la info a imprimir en el index y que pasará por el objeto/clase

//incluyo la clase

include("clases/usuarios.php");

//instancio la clase pasando los datos

$usuarios = new Usuarios('Ailén', 'Glassmam', '1997-12-22');

//llamo al método para imprimir los datos en el index

$usuarios-> imprime_caracteristicas();
?>