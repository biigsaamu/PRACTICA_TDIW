<?php

include_once __DIR__ . '/../model/cuenta.php';

if (isset($_SESSION['user_id'])) {
    
    $updated = false;
    $error_message = array();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_FILES['profile_img']) && !empty($_FILES['profile_img'])) {
            if (($_FILES["profile_img"]["type"] === "image/gif")
                || ($_FILES["profile_img"]["type"] === "image/jpeg")
                || ($_FILES["profile_img"]["type"] === "image/jpg")
                || ($_FILES["profile_img"]["type"] === "image/png")
                || ($_FILES["profile_img"]["type"] === "image/webp")
            ) {
                $imageName = basename($_SESSION['user_id'] . $_FILES['profile_img']['name']);

                $imagePath = sprintf('%s%s', $filesAbsolutePath, $imageName);
                

                if (move_uploaded_file($_FILES['profile_img']['tmp_name'], $imagePath)) {
                    
                    $updated = saveProfileImage($imageName, $_SESSION['user_id']);
                    
                    //Cogemos los datos actualizados
                    if ($updated) {
                        $datosCuenta = getUserInfoById($_SESSION['user_id']);
                    }
                
                    include_once __DIR__ . '/../view/info_cuenta.php';

                } else {
                    array_push($error_message, 'Error al cargar el archivo');
                }
            } else {
                array_push($error_message, 'Formato de imagen incorrecto');
            }
        }
    }
}
