<?php
// genero una variable para identificar la ubicación de la img de base para la miniatura
$src_img = imagecreatefromjpeg("img/unidad4.jpg");
// defino el tamaño de la img miniatura
$alto = imagesy($src_img)/3.4;
$ancho = imagesx($src_img)/3.4;
// creo una variable para la img redimensionada
$dst_img = imagecreatetruecolor($ancho, $alto);
//genero la img y la almaceno en una variable
$image = imagecreate($ancho, $alto);
// uso una función para generar una copia redimensionada de la img
imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $ancho, $alto, imagesx($src_img), imagesy($src_img));
// le doy formato
imagejpeg($dst_img, "img/miniatura.jpg");
// cierro la img
imagedestroy($dst_img);
?>