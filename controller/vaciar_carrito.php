<?php

if (isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

include_once __DIR__ . '/../view/carrito.php';

?>