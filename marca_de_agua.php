<?php
// creo una variable para colocar la img de marca de agua y otra para img de base
$marca_de_agua = "./img/marca.png";
$imagen_base = "./img/base.jpg";
//creo una variable dónde genero la img dinámica
$image = imagecreatefrompng($marca_de_agua);
// lo hago dinámico para que admita todos los formatos de img de base. Para ello extraigo los últimos 3 carácteres de la img > su extensión
$ext = substr($imagen_base, -3);
// nos aseguramos que los formatos ingresados vengan en minuscula
$ext = strtolower($ext);
// creamos la combinación dee la img y la marca de agua dependiendo la extensión 
switch ($ext) {
    case 'png':
        $img2 = imagecreatefrompng($imagen_base);
    break;
    
    case 'jpg':
        $img2 = imagecreatefromjpeg($imagen_base);
    break;
            
    case 'gif':
        $img2 = imagecreatefromgif($imagen_base);
    break;
};
// generamos la copia de la combinación de ambas imgs > marca de agua + base
imagecopy($img2, $image, (imagesx($img2)/2.3), (imagesy($img2)/2.5), (imagesx($image)/500), (imagesy($image)/500), imagesx($image), imagesy($image));
// le damos formato a la img
header("Content-type: img/jpeg");
//creamos la img en ese mismo formato 
imagejpeg($img2);
// cerramos ambas imgs
imagedestroy($img2);
imagedestroy($image);
?>