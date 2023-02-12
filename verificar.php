<?php
include('conexion.php');
$password = $_POST['password'];
$usuario = $_POST['email'];

$consulta = mysqli_query($conect_bd, "SELECT `password` FROM `user_pass` WHERE  `user_pass`.`usuario` = '$usuario'");

$codificacion = mysqli_fetch_assoc($consulta);
$verificacion = password_verify($password, $codificacion['password']);

if($verificacion) {
    header('Location: unidad8.php?ok');
} else {
    header('Location: unidad8.php?error');
}

?>