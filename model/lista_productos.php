<?php
require_once __DIR__ . '/connectDB.php';

function getLibros(){
    $conexion = connectDB();
    $sql = 'SELECT id, nom_producte, img, preu, categoria_id FROM producte';
    
    $stmt = pg_query($conexion, $sql); 

    $libros = pg_fetch_all($stmt);
    
    return $libros;
}

function getLibrosByCategoryId($category_id){
    
    $conexion = connectDB();
    $sql = 'SELECT id, nom_producte, img, preu, categoria_id FROM producte WHERE categoria_id=$1';
    $params = [$category_id];
    $stmt = pg_query_params($conexion, $sql, $params);

    $libros = pg_fetch_all($stmt);
    
    return $libros;
}
?>