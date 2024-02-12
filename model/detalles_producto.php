<?php
include_once __DIR__ . '/connectDB.php';

function getDetails(){
    $conexion = connectDB();
    $sql = 'SELECT id, nom_producte, img, descripcio, preu, autor, pagines FROM producte';
    $stmt = pg_query($conexion, $sql);
    $detalles = pg_fetch_all($stmt);

    return $detalles;
}

function getBookDetailsById($book_id){
    
    $conexion = connectDB();
    $sql = 'SELECT id, nom_producte, img, descripcio, preu, autor, pagines FROM producte WHERE id = $1';
    $params = [$book_id];
    
    $stmt = pg_query_params($conexion, $sql, $params);

    //Devuelve array de array, con el libro con el id especificado
    $libro = pg_fetch_all($stmt);
    
    return $libro[0];
}
?>