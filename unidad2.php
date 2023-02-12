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
		<h2>Eventos</h2>
		<h3>Ingresa la fecha a consultar</h3>
		<form class="formulario_u3" id="fecha" action="unidad2.php" method="POST">
			<input class="inputs_u3" type="number" name="day" min="1" max="31" placeholder="Día">
			<input type="number" name="month" min="01" max="12" placeholder="Mes" class="inputs_u3">
			<input type="number" name="year" min="2010" max="2050" placeholder="Año" class="inputs_u3">
			<button type="submit" value="calcular" class="boton_u3">CALCULAR</button>
		</form>
		
	</section>
	<aside>
		<?php
		if($_POST){ 
			include('calculo_fecha.php');
			echo "<h4>Fecha actual: " .date('d-m-Y'). "</h4>";
			echo "<h4>Fecha consultada: " .$fecha_ingresada. "</h4>";
		};

		
		
		?>
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>