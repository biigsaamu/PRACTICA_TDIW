<?php
include_once __DIR__ . '/connectDB.php';

function getProductDetails($book_id) {
    $conexion = connectDB();
    $sql = 'SELECT id, nom_producte, img, preu FROM producte WHERE id = $1';
    $params = [$book_id];
    $stmt = pg_query_params($conexion, $sql, $params);
    $result = pg_fetch_all($stmt);

    return $result[0];
}

?>