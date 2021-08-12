<html>
<head>
<title>Baja de ciudad</title>
</head>
<body>

<?php
include ("conexion.inc");

$name = $_POST ['name'];
$vSql = "SELECT * FROM ciudades WHERE nombre='$name' ";

$vResult = mysqli_query($link, $vSql);

if(mysqli_num_rows($vResult) == 0)
 {
 echo ("La ciudad no existe <br>");
 echo ("<a href='formUpdate.html'>Siguiente</a>");
}
else{



$vSql= "DELETE FROM ciudades WHERE nombre='$name' ";
mysqli_query($link, $vSql);
 echo("<p>Ciudad borrada satisfactoriamente</p>");
 echo("<a href='home.html'>Volver al Menu del ABM</a>");
}


mysqli_free_result($vResult);

mysqli_close($link);
?>
</body>
</html>