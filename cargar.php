<?php
//habilito sesión
session_start();
//recibo las variables del form y las almaceno en variables
$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$consulta = $_POST['consulta'];
$codigo = $_POST['codigo'];

//creo la validación del captcha
if($codigo == $_SESSION['captcha']) {
    //Conecto con la base de datos
    include('conexion.php');
    // envio la info recibida a la base de datos
    mysqli_query($conect_bd, "INSERT INTO consultas VALUES(default, '$name', '$surname', '$mail', '$consulta')");
    //Redireccionar el exito del envio a unidad 5
    header ("Location: unidad5.php?ok");
} else {
    //Redireccionar el error a unidad 5
    header ("Location: unidad5.php?error");
}
?>