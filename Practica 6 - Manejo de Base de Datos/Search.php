<html>
<head>
<title> Listados completo </title>
</head>
<body>
<?php
include("conexion.inc");
$vSql = "SELECT * FROM ciudades";
$vResultado = $link -> query ($vSql);
$total_registros= mysqli_num_rows($vResultado);
?>
<table width="500px">
<tr>
<td><b>Nombre</b></td>
<td><b>Pais</b></td>
<td><b>Superficie</b></td>
<td><b>Cantidad de habitantes</b></td>
<td><b>tieneMetro</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila['nombre']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
 <td><?php echo ($fila['superficie']); ?></td>
 <td><?php echo ($fila['canthabitantes']); ?></td>
 <td><?php echo ($fila['tieneMetro']); ?></td>
</tr>
<tr>
 <td colspan="6">
<?php
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>
 </td>
</tr>
</table>
<p>&nbsp;</p>
<p"><a href="home.html">Volver al menu del ABM</a></p>
</body>
</html>