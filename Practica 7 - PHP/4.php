<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

    <style>
        .content {
            text-align: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .button {
            border: 1px solid black;
            padding: 2px;
        }

        .news {
            text-align: center;
            width: 400px;
            border: 1px solid black;
        }
    </style>

</head>

<?php
if (isset($_POST['submit'])) {
    $category = $_POST["category"];
    setcookie("category", $category, time() + 60);
    header("Location: 4.php");
}
if (isset($_POST['clear'])) {
    setcookie("category", '', time() + 60);
    header("Location: 4.php");
}
?>

<body>
    <div class="container">
        <div class="content">
            <?php if (isset($_COOKIE['category'])) { ?>
                <div class="news">
                    <?php echo "<h1>Noticias de " . $_COOKIE['category'] . "</h1>" ?>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae at ratione corporis nesciunt unde! Nobis quo vel nihil numquam totam voluptates maxime alias, tempore ut, dicta recusandae voluptatibus deserunt debitis?</p>
                </div>
            <?php } ?>
            <form action="4.php" method="post">
                <h1>Seleccione una categoria</h1>
                <label class="button">Politica
                    <input type="radio" name="category" value="politica">
                </label>
                <label class="button">Economia
                    <input type="radio" name="category" value="economia">
                </label>
                <label class="button">Deportes
                    <input type="radio" name="category" value="deportes">
                </label>
                <br><br>
                <button type="submit" name="submit">Ver noticias</button>
                <button type="submit" name="clear">Limpiar categoria</button>
            </form>
        </div>
    </div>
</body>

</html>