<?php

if (isset($_GET['bookId']) && isset($_GET['quantity'])) {
    
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $index => $product) { 
            if ($product['id'] == $_GET['bookId']) {
                $_SESSION['carrito'][$index]['cantidad'] = $_GET['quantity'];
            }   
        }
        
    }
}

include_once __DIR__ . '/../view/carrito.php';

?>