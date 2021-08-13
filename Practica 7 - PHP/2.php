<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .content {
            margin: 30px;
            border: 1px solid black;
            padding: 2rem 4rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>

</head>

<?php
if (!isset($_COOKIE['counter'])) {
    setcookie('counter', 0, time() + 60);
    $visits = 0;
} else {
    $visits = $_COOKIE['counter'] + 1;
    setcookie('counter', $visits, time() + 60);
}
?>

<body>
    <div class="container">
        <div class="content">
            <h1>Contador: <?php echo $visits ?></h1>
            <?php if ($visits == 0) { ?>
                <h1>¡Bienvenido!</h1>
            <?php } ?>
        </div>
    </div>
</body>

</html>