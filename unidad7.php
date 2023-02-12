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
	<section id="listado_productos">
		<h2>Compras</h2>
		<table>
			<tr>
				<td class="unidad_7">Código</td>
				<td class="unidad_7">Producto</td>
				<td class="unidad_7">Descripción</td>
				<td class="unidad_7">Precio</td>
				
			</tr>
		
			<?php 
			include("recursos.php");


			$listar_producto = $productos->listar_productos();
			for($i = 0 ; $i < count($listar_producto) ; $i++) {
			?>
			<tr>
				<td>
					<?php echo $listar_producto[$i]['codigo']; ?>
				</td>
				<td>
					<?php echo $listar_producto[$i]['producto']; ?><
				</td>
				<td>
					<?php echo $listar_producto[$i]['descripcion']; ?>
				</td>
				<td class="precio">
					<?php echo $listar_producto[$i]['precio']; ?>
				</td>
				<td><a class="boton" href="boton_comprar.php?codigo=<?php echo $listar_producto[$i]['codigo']?>
				&&producto=<?php echo $listar_producto[$i]['producto']?>
				&&descripcion=<?php echo $listar_producto[$i]['descripcion']?>	
				&&precio=<?php echo $listar_producto[$i]['precio']?>">COMPRAR</a></td>
			</tr>
			<?php } ?>
			</table>
	</section>
	<aside>
		<h2>Carrito</h2>
			<?php 
				$listar_compras = $carrito -> listar_compra();
				for ($i=0; $i< count($listar_compras); $i++){
			?>
			<div class="compra">
				<h4>CÓDIGO: </h4><p><?php echo $listar_compras[$i]['codigo']; ?></p>
				<h4>PRODUCTO: </h4><p><?php echo $listar_compras[$i]['producto']; ?></p>
				<h4>DESCRIPCIÓN: </h4><p><?php echo $listar_compras[$i]['descripcion'];?></p>
				<h4>PRECIO: </h4><p>$ <?php echo $listar_compras[$i]['precio'];?></p>
				<br>
				<a class="boton" href="boton_eliminar.php?codigo=<?php echo $listar_compras[$i]['codigo']?>">ELIMINAR</a>
			</div>
			<br>
		<?php } ?>
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>