<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");


$name = $_POST['name'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM ciudades WHERE nombre ='$name' ";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$row = mysqli_fetch_array($vResultado);
if(mysqli_num_rows($vResultado) == 0) {
 echo ("<p>La ciudad indicada no existe.</p>");
 echo ("<a href='formUpdate.html'>Siguiente</A>");
}
else{
?>
<FORM action="Update.php" method="POST" name="formUpdate">
<input type="text" name="id" hidden=true value= " <?php echo($row['id']); ?> ">
<table width="500">
<tr>
 <td width="150"> Nombre: </td>
 <td width="250"> <input type="text" name="name" value="<?php echo($row['nombre']); ?>">
 </td>
</tr>
<tr>
 <td width="150"> Pais: </td>
 <td width="250"> <input type="text" name="country" size="35" maxlength="35"
 value="<?php echo($row['pais']); ?>">
 </td>
 </tr>
 <tr>
 <td width="150"> Superficie: </td>
 <td width="250"> <input type="text" name="surface" size="35" maxlength="35"
 value="<?php echo($row['superficie']); ?>">
 </td>
</tr>

<tr>
 <td width="150"> Cant. Habitantes: </td>
 <td width="250"> <input type="text" name="amount_people" size="35" maxlength="35"
 value="<?php echo($row['canthabitantes']); ?>">
 </td>
</tr>
<tr>
 <td width="150"> Tiene metro: </td>
 <td width="250"> <input type="checkbox" name="haveMetro" size="35" maxlength="40"
 value="<?php $row['tieneMetro']?>">
 </td>
 </tr>
 <tr>
 <td colspan="2"> <input type="submit" name="Submit" value="Modificar">
 </td>
 </tr>
</table>
</FORM>
<?php
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>