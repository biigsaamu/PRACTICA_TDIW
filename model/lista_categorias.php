<?php
include_once __DIR__ . '/connectDB.php';

function getCategories(){
    $conexion = connectDB();
    $sql = 'SELECT id, nom, img FROM categoria';
    $stmt = pg_query($conexion, $sql);
    $categorias = pg_fetch_all($stmt);
    return $categorias;
}

function getCategoryById($category_id){
   
    $conexion = connectDB();
    $sql = 'SELECT id, nom, img FROM categoria WHERE id=$1';
    $params = [$category_id];
    $stmt = pg_query_params($conexion, $sql, $params);


    $categoria  = pg_fetch_all($stmt);

    return $categoria[0];
}
?>