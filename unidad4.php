<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./estilos.css">
  <link href="css/lightbox.min.css" rel="stylesheet" />
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Imágenes con PHP</h2>
		<h4>Marca de Agua</h4>
		<img src="marca_de_agua.php" alt="marca de agua" style="width: 100%;">
		<h4>Img miniatura o thumbnail</h4>
		<?php
		//include("thumbnail.php");
		?>
		<a href="img/unidad4.jpg" data-lightbox="image-1"><img src="img/miniatura.jpg" alt="img miniatura"></a>
	</section>
	<aside>
	<h4>Corroboración de formatos</h4>
		<?php
			if (imagetypes() & IMG_GIF) {
			echo "<p>El tipo <strong>GIF</strong> es soportado</p>";
			}else {
			echo "<p>El tipo <strong>GIF NO</strong> es soportado</p>";
			}
			if (imagetypes() & IMG_PNG) {
			echo "<p>El tipo <strong>PNG</strong> es soportado</p>";
			}else{
			echo "<p>El tipo <strong>PNG NO</strong> es soportado</p>";
			}
			if (imagetypes() & IMG_JPG) {
			echo "<p>El tipo <strong>JPG</strong> es soportado</p>";
			}else{
			echo "<p>El tipo <strong>JPG NO</strong> es soportado</p>";
			}
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<!-- https://lokeshdhakar.com/projects/lightbox2/ link de la librería empleada-->
</body>
</html>