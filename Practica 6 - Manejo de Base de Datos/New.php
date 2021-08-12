<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
include("conexion.inc");

$name = $_POST['name'];
$country = $_POST['country'];
$surface = $_POST['surface'];
$amount_people = $_POST['amount_people'];


$haveMetro = isset($_POST["haveMetro"])? 1:0;


$vSql = "SELECT Count(canthabitantes) as amount FROM ciudades WHERE nombre='$name'";
$vResult = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vAmountUsers = mysqli_fetch_assoc($vResult);


if ($vAmountUsers ['amount']!=0){
 echo ("<p>La capital ya existe</p>");
 echo ("<A href='Menu.html'>Volver a inicio</A>");
}
else {
$vSql = "INSERT INTO ciudades (nombre, pais, superficie,canthabitantes, tieneMetro)
values ('$name','$country', '$surface', '$amount_people', '$haveMetro')";
mysqli_query($link, $vSql) or die (mysqli_error($link));
echo("<p>Capital cargada satisfactoriamente</p>");
echo ("<A href='home.html'>Volver al menu</A>");

mysqli_free_result($vResult);
}
mysqli_close($link);
?>
</body>
</html>