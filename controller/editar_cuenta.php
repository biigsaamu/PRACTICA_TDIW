<?php

include_once __DIR__ . '/../model/cuenta.php';

if (isset($_SESSION['user_id']) && isset($_GET['user_id'])) {
    
    $datosCuenta = getUserInfoById($_GET['user_id']);
    
    include_once __DIR__ . '/../view/editar_cuenta.php';
    

} else {
    echo "No se ha podido cargar la información de la cuenta";
}
