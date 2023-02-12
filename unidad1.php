<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./estilos.css">
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
		<h2>Agenda de clases</h2>
		<!--Incluir el archivo ver_clases.php dentro del archivo unidad1.php-->
		<h3>Agregar Clase</h3>
		<form class="formulario_u3" action="insertar_clases.php" method="POST">
			<input class="inputs_u3" type="text" name="unidad" id="unidad" placeholder="Nombre Unidad">
			<input class="inputs_u3" type="date" name="fecha" id="fecha" placeholder="Fecha de la clase">
			<button class="boton_u3" type="submit" value="Cargar">CARGAR</button><br>
			<button class="boton_u3" type="reset" value="Limpiar Campos">LIMPIAR CAMPOS</button>
		</form>
		<div>
			<?php
			if(isset($_GET['ok'])) { ?>
				<h3>Clase cargada a la agenda</h3>
			<?php } ?>
		</div>
	</section>
	<aside>
	<h2>Listado de clases</h2>
    <?php
		include('ver_clases.php');
	?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>