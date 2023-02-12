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
		<h2>Registro</h2>
		<!--registro para registrar un usuario y su contraseña-->

		<form class="formulario_u3" action="codificar.php" method="post">

			<input class="inputs_u3" type="email" name="email" id="email" placeholder="Tu email">

			<input class="inputs_u3" type="password" name="password" id="password" placeholder="Ingrese su contraseña">

			<button type="submit" class="boton_u3">Codificar</button>
		</form>
		<!--traigo una respuesta por metodo get para indicarle al usuario que el proceso fue realizado-->
		<?php if(isset($_GET['reg_ok'])) {echo "<h3>Contraseña codificada correctamente</h3>";}?>

	</section>
	<aside>
		<h2>Verificación de usuario y contraseña</h2>

		<!--verificación de un usuario y su contraseña. Identificar si estan registrados en la base de datos-->

    	<form class="formulario_u3" action="verificar.php" method="post">

			<input class="inputs_u3" type="email" name="email" id="email" placeholder="Tu email">

			<input class="inputs_u3" type="password" name="password" id="password" placeholder="Ingrese su contraseña">

			<button type="submit" class="boton_u3">Verificar</button>

		</form>

		<!--traigo una respuesta por metodo get para indicarle al usuario que el proceso fue realizado-->

		<?php if(isset($_GET['ok'])) {
			echo "<h3>Usuario y contraseña registrados</h3>";
		}?>
		
		<?php if (isset($_GET['error'])){
			echo "<h3>Usuario y contraseña no encontrada</h3>";
		} ?>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>