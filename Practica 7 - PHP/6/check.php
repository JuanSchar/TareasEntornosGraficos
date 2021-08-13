<?php
session_start();
include("conection.php");
$email = $_POST['email'];

$query = "SELECT * FROM alumnos WHERE mail ='$email' ";
$result = mysqli_query($conection, $query) or die(mysqli_error($conection));
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) == 0) {
    echo ("El usuario no existe.");
    echo "<a href='index.php'>Volver a intentar</a>";
} else {
    $_SESSION['fullname'] = $row['nombre'];
    header("Location: getdata.php");
}
