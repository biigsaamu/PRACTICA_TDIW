<?php 
    require_once __DIR__ . '/../model/connectDB.php';
    require_once __DIR__ . '/../model/lista_categorias.php';
    require_once __DIR__ . '/../model/lista_productos.php';

    $categoria = getCategoryById($_REQUEST['categoria_id']);   
    
    $libros = getLibrosByCategoryId($_REQUEST['categoria_id']);

    require_once __DIR__ . '/../view/lista_productos.php';
?>