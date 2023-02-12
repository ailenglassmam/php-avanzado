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
		<h2>Comentarios</h2>
		<form action="" method="POST" class="formulario_u3">
			<input type="text" name="nombre-y-apellido" class="inputs_u3" placeholder="Nombre y Apellido" required>
			<input type="email" name="email" id="email" placeholder="Tu E-mail de Contacto" required class="inputs_u3">
			<textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Tu comentario" required class="textarea_u3"></textarea>
			<button type="submit" name="enviar" class="boton_u3">Enviar comentario</button>
		</form>
		<div>
			<!--esto me permite que los comentarios, al actualizar la pantalla, se mantengan visibles-->
		<?php  
			$lectura = fopen ('comentarios.txt', 'r');
			fpassthru($lectura);
			fclose($lectura);
		?>
		</div>
		<div>
    		<?php
				if($_POST){
				include('comentarios.php');
				}
			?>
		</div>
	</section>
	<aside>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>