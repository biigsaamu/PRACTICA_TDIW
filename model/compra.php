<?php
include_once __DIR__ . '/connectDB.php';

function saveComanda($date, $numProducts, $price, $userID) {
    $conexion = connectDB();

    $sql = "INSERT INTO comanda (data_creacio, num_elements, import_total, usuari_id) 
              VALUES ($1, $2, $3, $4)";

    $params = [$date, $numProducts, $price, $userID];
    $result = pg_query_params($conexion, $sql, $params);

    if ($result) {
        return true;
    } else {
        return false;
    }

}

function getComandaId($price, $date) {
    $conexion = connectDB();
    $sql = 'SELECT id FROM comanda WHERE data_creacio = $1 AND import_total = $2';
    $params = [$date, $price];
    $stmt = pg_query_params($conexion, $sql, $params);
    $result = pg_fetch_all($stmt);

    return $result[0]['id'];

    /* SELECT AMB PDO
    $conexion = conectBD();
    $sql = 'SELECT id FROM comanda WHERE data_creacio = ? AND import_total = ?';
    $stmt = $conexion->prepare($sql);
    $dades = array($data, $price);
    $stmt->execute($dades);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    */
}

function saveLineaComanda($productName, $quantity, $unitPrice, $totalPrice, $comandaID, $productID, $productImg) {
    $conexion = connectDB();

    $sql = "INSERT INTO linia_comanda (nom_producte, quantitat, preu_unitari, preu_total, comanda_id, producte_id, img) 
              VALUES ($1, $2, $3, $4, $5, $6, $7)";

    $params = array($productName, $quantity, $unitPrice, $totalPrice, $comandaID, $productID, $productImg);
    $result = pg_query_params($conexion, $sql, $params);

    /* INSERT AMB PDO
    $conexion = conectBD();
    $sql = 'INSERT INTO `linia_comanda` (nom_producte,quantitat,preu_unitari,preu_total,comanda_id,producte_id, img) VALUES (?,?,?,?,?,?)';
    $conexio = $conexion->prepare($sql);
    $dades = array($productName, $quantity, $unitPrice, $totalPrice, $comandaID, $productID, $productImg);
    $conexio->execute($dades);
    */

    if ($result) {
        return true;
    } else {
        return false;
    }
}

/* DELETE AMB PDO

$conexion = conectBD();

$sql = "DELETE FROM producto WHERE nombre = ?";

$stmt = $conexion->prepare($sql);

$dades = array($nombreProductoEliminar);

$stmt->execute($dades);

*/

?>