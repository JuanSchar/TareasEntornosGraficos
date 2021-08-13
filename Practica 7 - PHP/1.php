<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
        }

        .submit {
            margin: 10px 0px;
        }

        button {
            width: 100%;
        }
    </style>
</head>

<?php

if (isset($_POST['background-color'])) {
    $backgroundcolor = $_POST['background-color'];
    setcookie('backgroundcolor', $backgroundcolor, time() + 60);
} else {
    if (isset($_COOKIE['backgroundcolor'])) {
        $backgroundcolor = $_COOKIE['backgroundcolor'];
    } else {
        $backgroundcolor = 'white';
    }
}

if (isset($_POST['text-color'])) {
    $textcolor = $_POST['text-color'];
    setcookie('textcolor', $textcolor, time() + 60);
} else {
    if (isset($_COOKIE['textcolor'])) {
        $textcolor = $_COOKIE['textcolor'];
    } else {
        $textcolor = 'white';
    }
}

?>

<body>
    <?php echo "<div class='container' style='background-color:" . $backgroundcolor . "; color:" . $textcolor . "'>"; ?>
    <form action="1.php" method="post">
        <div class="option1">
            <h2>Elija color de fondo</h2>
            <label>Blanco
                <input type="radio" name="background-color" value="white">
            </label>
            <label>Negro
                <input type="radio" name="background-color" value="black">
            </label>
            <label>Azul
                <input type="radio" name="background-color" value="blue">
            </label>
            <label>Amarillo
                <input type="radio" name="background-color" value="yellow">
            </label>
        </div>
        <div class="option2">
            <h2>Elija color de texto</h2>
            <label>Negro
                <input type="radio" name="text-color" value="black">
            </label>
            <label>Rojo
                <input type="radio" name="text-color" value="red">
            </label>
            <label>Naranja
                <input type="radio" name="text-color" value="orange">
            </label>
            <label>Verde
                <input type="radio" name="text-color" value="green">
            </label>
        </div>
        <div class="submit">
            <button type="submit">Dar estilo</button>
        </div>
    </form>
    </div>
</body>

</html>