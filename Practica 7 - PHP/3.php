<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <style>
        .container {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

</head>

<?php
if ($_POST['username']) {
    setcookie('username', $_POST['username'], time() + 60);
    $lastUsername = $_POST['username'];
}
?>

<body>
    <div class="container">
        <h1>Ingrese nombre</h1>
        <?php if ($lastUsername != '') {
            echo "<h3>Ultimo nombre ingresado: $lastUsername</h3>";
        } else {
            echo "<h3>Todavia no se ingreso ningun nombre</h3>";
        } ?>
        <form action="3.php" method="post">
            <input type="text" placeholder="Nombre" name="username">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>