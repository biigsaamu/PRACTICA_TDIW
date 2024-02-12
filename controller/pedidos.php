<?php

include_once __DIR__ . '/../model/connectDB.php';
include_once __DIR__ . '/../model/pedidos.php';

if (isset($_SESSION['user_id']) && isset($_GET['user_id'])) {

    $contador = 0;

    $comandas = getComandas($_GET['user_id']);

    foreach ($comandas as $comanda) {
        $lineas_comanda = getLineasComandaByComandaId($comanda['id']);
        $comandas[$contador]['prodcuts'] = $lineas_comanda;
        $contador++;
    }

    include_once __DIR__ . '/../view/pedidos.php';
    
} else {
    echo "No se ha podido cargar el historial de pedidos";
}




?>