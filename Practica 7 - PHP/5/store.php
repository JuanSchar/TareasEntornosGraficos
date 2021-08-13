<?php
$nombre = $_POST["username"];
$password = $_POST["password"];

session_start();
$_SESSION["username"] = $nombre;
$_SESSION["password"] = $password;

header("Location: getdata.php");
