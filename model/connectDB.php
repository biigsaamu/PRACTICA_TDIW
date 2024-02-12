<?php

function connectDB(){
    $conexion = null;

    try {
        $conexion = pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-l10 user=tdiw-l10 password=g6_brHJY"); //Poner or die
    } catch (\Throwable $th) {
        echo "Error: " . $th->getMessage();
    }

    return $conexion;
}

?>