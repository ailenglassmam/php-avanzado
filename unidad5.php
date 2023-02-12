<?php session_start();?>
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
		<h2>Consultas</h2>
		<!--creo la función para la generación del captcha aleatorio-->
		<?php
			function contenido_captcha() {
				//creo una variable para almacenar los elementos aleatorios del captcha 
				$pattern = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
				//creo una variable que unirá los valores del captcha final 
				$clave = '';
				//creo un for para generar el captcha aleatorio
				for($i=0; $i<8; $i++){
					$clave .= $pattern[rand(0,62)];	
				}
				return $clave;
			}
			//almaceno el resultado en una variable session
			$_SESSION['captcha'] = contenido_captcha();
		?>
		<form class="formulario_u3" action="cargar.php" method="post" style="text-align:center;">
			<input type="text" name="name" placeholder="Nombre" required class="inputs_u3">
			<input type="text" name="surname" placeholder="Apellido" required class="inputs_u3">
			<input type="email" name="mail" placeholder="Email" required class="inputs_u3">
			<textarea name="consulta" placeholder="Tu consulta" cols="30" rows="10" required class="textarea_u3"></textarea>
			<img src="img_captcha.php" alt="codigo de seguridad" class="captcha" style="width:200px;">
			<input type="text" name="codigo" placeholder="Código de seguridad" required class="inputs_u3">
			<button type="submit" name="Enviar" class="boton_u3">Enviar</button>
		</form>
	</section>
	<aside>
    	<div>
			<?php
			if(isset($_GET['ok'])) { ?>
				<h3>Consulta enviada</h3>
			<?php } ?>
			<?php
			if(isset($_GET['error'])) { ?>
				<h3>No se pudo cargar la consulta. Vuelve a intentarlo</h3>
			<?php } ?>
		</div>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>