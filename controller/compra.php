<?php
include_once __DIR__ . '/../model/connectDB.php';
include_once __DIR__ . '/../model/compra.php';

if (isset($_SESSION['user_id']) && isset($_SESSION['carrito'])) {
    $precioComanda = 0.0;
    $numProducts = 0;
    $fecha = date('d/m/Y'); //Guardamos fecha en formato dd/mm/yyyy
    
    foreach ($_SESSION['carrito'] as $prod) {
        $precioComanda += $prod['preu'] * $prod['cantidad'];
        $numProducts += $prod['cantidad'];
    }

    //Guardamos datos comanda en BD
    $isCreated = saveComanda($fecha, $numProducts, $precioComanda, $_SESSION['user_id']);

    if ($isCreated) { //Si la comanda es insertada correctamente en la BD se guardan todas las linias comanda

        $comandaID = getComandaId($precioComanda, $fecha);

        $allSaved = array();

        foreach ($_SESSION['carrito'] as $prod) {
            $productName = $prod['nom_producte'];
            $quantity = $prod['cantidad'];
            $unitPrice = $prod['preu'];
            $totalPrice = $quantity * $unitPrice;
            $productID = $prod['id'];
            $product_img = $prod['img']; //Use later in pedidos.php
            
            //Guardamos en el array $allSaved el valor que devuelve la función que inserta las 
            //linias comanda en las tablas de la BD (true o false)
            array_push($allSaved, saveLineaComanda(
                $productName,
                $quantity,
                $unitPrice,
                $totalPrice,
                $comandaID,
                $productID,
                $product_img
            ));
        }

        //Si no contiene ningún elemento falso se han guardado todas las linias de comanda correctamente
        if (!in_array(false, $allSaved)) {
            //Una vez guardados los datos de la comanda y de sus respectivas linias de comanda con éxito 
            //vaciamos el carrito
            $_SESSION['carrito'] = [];
        }
    }
}

include_once __DIR__ . '/../view/compra.php';
