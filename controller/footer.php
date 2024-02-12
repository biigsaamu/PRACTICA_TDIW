<?php
    
    if (isset($_SESSION['user_id']) && isset($_SESSION['carrito'])) {

        //Obtenemos el array del último libro añadido al carrito de la compra
        $lastProd = end($_SESSION['carrito']);
        
        //Valores por defecto del resmuen del carrito
        $carritoFooter = array(
            'numProducts' => 0,
            'totalPrice' => 0.0,                
            'lastProduct' => $lastProd
        );
        
        //Si hay ptoductos en el carrito, recorremos este para saber de cada libro la cantidad y el precio
        //Pudiendo así calcular e total 
        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $prod) {

                $carritoFooter['numProducts'] += $prod['cantidad']; 
    
                $carritoFooter['totalPrice'] += ($prod['preu'] * $prod['cantidad']); 

            }
        }      
    }

    
    require_once __DIR__ . '/../view/footer.php';

?>