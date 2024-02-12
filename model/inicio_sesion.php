<?php

include_once __DIR__ . '/connectDB.php';

function getUserInfoToLogIn($mail) {
    $conexion = connectDB();
    $sql = 'SELECT id, email, "password" FROM usuari WHERE email = $1 LIMIT 1';

    $params = [$mail];
    $stmt = pg_query_params($conexion, $sql, $params);

    $result = pg_fetch_all($stmt);

    if ($result != null) {
        return $result[0];
    } else {
        return null;
    }
    


}

?>