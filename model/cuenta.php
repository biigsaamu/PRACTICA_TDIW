<?php

include_once __DIR__ . '/connectDB.php';

function getUserInfoById($user_id) {
    $conexion = connectDB();
    $sql = 'SELECT * FROM usuari WHERE id = $1 LIMIT 1';
    $params = [$user_id];
    $stmt = pg_query_params($conexion, $sql, $params);

    $accountData = pg_fetch_all($stmt);

    return $accountData[0];
}

function updateProfileChanges($user_id, $name, $email, $password, $adress, $location, $postalCode) {
    $conexion = connectDB();
    $sql = 'UPDATE usuari SET nom = $2, email = $3, password = $4, direccio = $5, poblacio = $6, codi_postal = $7 WHERE id = $1'; //faltará path img
    $params = [$user_id, $name, $email, $password, $adress, $location, $postalCode];
    $result = pg_query_params($conexion, $sql, $params);

    /* UPDATE AMB PDO
    $conexion = conectBD();
    $sql = 'UPDATE usuari SET nom = ?, email = ?, 'password' = ?, direccio = ?, poblacio = ?, codi_postal = ? WHERE id = ?';
    $stmt = $conexion->prepare($sql);
    $dades = array($name, $email, $password, $adress, $location, $postalCode, $user_id); OJO ORDEN!!
    $stmt->execute($dades);
    */

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function saveProfileImage($img_name, $user_id) {
    $conexion = connectDB();
    $sql = 'UPDATE usuari SET img = $2 WHERE id = $1';
    $params = [$user_id, $img_name];
    $result = pg_query_params($conexion, $sql, $params);

    if ($result) {
        return true;
    } else {
        return false;
    }
}


?>