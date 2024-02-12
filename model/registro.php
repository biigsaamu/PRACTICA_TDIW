<?php

include_once __DIR__ . '/connectDB.php';

function registro($name, $email, $password, $address, $location, $postalCode) {

    $conexion = connectDB();

    // Hash de la contraseña antes de almacenarla en la base de datos
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuari (nom, email, password, direccio, poblacio, codi_postal) 
              VALUES ($1, $2, $3, $4, $5, $6)";

    $params = array($name, $email, $hashedPassword, $address, $location, $postalCode);
    $result = pg_query_params($conexion, $sql, $params);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function getUserId($mail, $password) {
    $conexion = connectDB();
    $sql = 'SELECT id, email, "password" FROM usuari WHERE email = $1 LIMIT 1';

    $params = [$mail];
    $stmt = pg_query_params($conexion, $sql, $params);

    print_r($stmt);

    $result = pg_fetch_all($stmt);

    if ($result === false) {
        return null;
    } else if (password_verify($password, $result[0]['password'])){
        print_r("ID: " .$result[0]['id']);
        return $result[0]['id'];
    }

    return null;

}
?>