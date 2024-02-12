<?php
include_once __DIR__ . '/../model/connectDB.php';
include_once __DIR__ . '/../model/carrito.php';

if (isset($_GET['libro_id']) && isset($_GET['quantity'])) {
    
    $trobat = false;
    $cantidad = $_GET['quantity'];
    $contador = 0; //Variable para acceder al índice del producto del carrito que queremos

    //Recorremos el array 'carrito' de la variable superglobal SESSION para ver si el libro que se
    //está pasando en la llamada asincrona existe ya en el 'carrito'
    foreach ($_SESSION['carrito'] as $index => $prod) {
        if ($prod['id'] == $_GET['libro_id']) {
            $_SESSION['carrito'][$index]['cantidad'] += $cantidad;
            $trobat = true;
        }
    }

    //En caso que no exista un ejemplar del libro en el carrito, se añade como nuevo elemento a este
    if (!$trobat) {
        $product = getProductDetails($_GET['libro_id']);
        $product['cantidad'] = $cantidad; //Creamos key cantidad en array devuelto por la función
        array_push($_SESSION['carrito'], $product);
    }

}
include_once __DIR__ . '/../view/carrito.php';
