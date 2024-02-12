<?php

include_once __DIR__ . '/../model/connectDB.php';
include_once __DIR__ . '/../model/lista_categorias.php';
include_once __DIR__ . '/../model/detalles_producto.php';

$categoria = getCategoryById($_GET['categoria_id']); 

$libro = getBookDetailsById($_GET['libro_id']);

include_once __DIR__ . '/../view/detalles_producto.php';

?>