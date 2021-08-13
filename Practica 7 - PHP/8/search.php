<?php
include("conection.php");
$song = $_POST['song'];

$query = "SELECT * FROM buscador WHERE nombre LIKE '%" . $song . "%' ";
$result = mysqli_query($conection, $query) or die(mysqli_error($conection));
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) == 0) {
    echo ("La cancion no existe.");
    echo "<a href='index.php'>Volver a intentar</a>";
} else {
    echo "La cancion si existe. Nombre: " . $row['nombre'] . " | Artista: " . $row['artista'];
    echo "<a href='index.php'>Volver a buscar</a>";
}
