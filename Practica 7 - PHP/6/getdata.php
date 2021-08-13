<?php
session_start();
if (isset($_SESSION['fullname'])) {
    echo "Bienvenido " . $_SESSION['fullname'];
} else {
    echo "No puedes ingresar.";
    echo "<a href='index.php'>Volver a intentar</a>";
}
session_destroy();
