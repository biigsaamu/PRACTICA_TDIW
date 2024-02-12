<?php

if (isset($_GET['bookId'])) {
    if (isset($_SESSION['carrito'])) {
        
        foreach ($_SESSION['carrito'] as $index => $product) {
            if ($product['id'] == $_GET['bookId']) {
                unset($_SESSION['carrito'][$index]);
            }
        }

    }
}

include_once __DIR__ . '/../view/carrito.php';

?>