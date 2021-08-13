<?php
$server = 'localhost';
$user = 'root';
$password = 'root';

$conection = mysqli_connect($server, $user, $password) or die("Error con la conexion a la base de datos");

mysqli_select_db($conection, "prueba");
