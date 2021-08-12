<?php
include ("conexion.inc");



$id=$_POST['id'];
$name = $_POST['name'];
$country = $_POST['country'];
$surface = $_POST['surface'];
$amount_people = $_POST['amount_people'];
$haveMetro = isset($_POST["haveMetro"])? 1:0;



$vSql = "UPDATE ciudades set nombre='$name', pais='$country', canthabitantes='$amount_people' ,superficie='$surface', tieneMetro='$haveMetro' 
where id=$id";

mysqli_query($link,$vSql) or die (mysqli_error($link));

echo("Ciudad modificada con exito<br>");
echo("<A href= 'home.html'>Volver a inicio</A>");


mysqli_close($link);
?>
