<?php
			
    if(isset($_POST['enviar'])) {

		// recibo los datos del formulario y los almaceno en variables

        $nombre = '<h4>Nombre y Apellido: </h4>'.$_POST['nombre-y-apellido'];
        $mail = '<h4>Mail de contacto: </h4>'.$_POST['email'];
        $comentario = '<h4>Comentario: </h4>'.$_POST['comentario'];

        //establezco día y hora del comentario realizado
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha = date("d-m-Y G:i");

        //creo una variable que almacene la información con formato
        $mensaje = '<div class="comentario_unidad3">'.$nombre.'<br>'.$mail.'<br>'.$comentario.'<h5>Fecha: '.$fecha.'</h5></div>';

        //$texto_comentario = "<div class='comentario_unidad3'><p><strong>Nombre y Apellido:</strong> ${nombre_unidad3}</p><p><strong>Email:</strong> ${email_unidad3}</p><p><strong>Comentario:</strong> $comentario_unidad3</p><p><strong>Fecha:</strong> $fecha_actual</p></div>";

		//creo un archivo para guardar datos recibidos
		$file = fopen('comentarios.txt', 'a+');

        //envio la info al archivo creado
        fputs($file, $mensaje);

        //lo imprimo en el HTML
        fpassthru($file);

        //cierro el archivo de txt
        fclose($file);

	}

    ?>