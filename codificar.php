<?php
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost'=>4)); //la parte del array es el nivel de encriptación que se le va a dar a la contraseña.
$usuario = $_POST['email'];

include('conexion.php');

mysqli_query($conect_bd, "INSERT INTO user_pass VALUES ('$usuario', '$password')");

header("Location: unidad8.php?reg_ok");
?>