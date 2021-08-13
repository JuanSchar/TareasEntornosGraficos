<?php
session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];

echo "Datos ingresados: USUARIO: " . $username . " CONTRASENA: " . $password;
