<?php

include_once __DIR__ . '/../model/connectDB.php';

function getComandas($user_id) {
    $conexion = connectDB();
    $sql = 'SELECT * FROM comanda WHERE usuari_id = $1';
    $params = [$user_id];
    $stmt = pg_query_params($conexion, $sql, $params);
    $comandes = pg_fetch_all($stmt);

    return $comandes;
}

function getLineasComandaByComandaId($comanda_id) {
    $conexion = connectDB();
    $sql = 'SELECT * FROM linia_comanda WHERE comanda_id = $1';
    $params = [$comanda_id];
    $stmt = pg_query_params($conexion, $sql, $params);
    $lineas_comanda = pg_fetch_all($stmt);

    return $lineas_comanda;
}

?>