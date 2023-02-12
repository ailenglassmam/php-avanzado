<?php
//habilito la session
session_start();
//doy formato a la img
header("Content-type: image/jpeg");
//creo una varible para crear la img 
$img = imagecreate(140, 40);
//creo una variable para el color de fondo y el color del texto 
$fondo = imagecolorallocate($img, 250, 250, 250);
$texto = imagecolorallocate($img, 0, 0, 0);
//creo una funcion para unir el fondo y el texto
imagestring($img, 5, 35, 10, $_SESSION['captcha'], $texto);
//doy formato a la img
imagejpeg($img);
?>