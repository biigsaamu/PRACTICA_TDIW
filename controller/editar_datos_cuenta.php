<?php
include_once __DIR__ . '/../model/cuenta.php';

if (isset($_SESSION['user_id'])) {


    $updated = false;
    $error_message = array();
    //Si la acción del formulario es POST, y la contraseña introducida en el campo de actual 
    //contraseña coincide con la registrada en la BD se guardan los cambios efectuados por el usuario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $datosCuenta = getUserInfoById($_SESSION['user_id']);

        $filters = filter_input_array(
            INPUT_POST, 
            [
                'name' => FILTER_DEFAULT,
                'email' => FILTER_DEFAULT,
                'current_pwd' => FILTER_DEFAULT,
                'new_pwd' => FILTER_DEFAULT,
                'confirm_pwd' => FILTER_DEFAULT,
                'adress' => FILTER_DEFAULT,
                'location' => FILTER_DEFAULT,
                'CP' => FILTER_DEFAULT,

            ]
        );

        $name = $filters['name'];
        $email = $filters['email'];
        $current_password = $filters['current_pwd'];
        $new_password = $filters['new_pwd'];
        $confirm_password = $filters['confirm_pwd'];
        $adress = $filters['adress'];
        $location = $filters['location'];
        $postalCode = $filters['CP'];

        //Verificamos que la contraseña actual sea la correcta
        if (password_verify($current_password, $datosCuenta['password'])) {

            if (!empty($new_password) && !empty($confirm_password)) {

                if ($new_password === $confirm_password) {
                    $hashedNewPassword = password_hash($new_password, PASSWORD_DEFAULT);

                    $updated = updateProfileChanges($_SESSION['user_id'], $name, $email, $hashedNewPassword, $adress, $location, $postalCode);
                } else {
                    array_push($error_message, 'La contraseña introducida para confirmar no coincide con la nueva');
                }
            }
        } else {
            if (empty($current_password)) {
                //Si no se rellena el campo de current_password para cambiar contraseña se actualizan 
                //los demás datos, que pueden haber o no estado modificados, con la contraseña que ya
                //tenia el usuario

                $updated = updateProfileChanges(
                    $_SESSION['user_id'],
                    $name,
                    $email,
                    $datosCuenta['password'],
                    $adress,
                    $location,
                    $postalCode
                );
            } else {
                array_push($error_message, 'La contraseña actual introducida no es correcta');
            }
        }
    }

    //Cogemos los datos actualizados
    if ($updated) {
        $datosCuenta = getUserInfoById($_SESSION['user_id']);
    }


    include_once __DIR__ . '/../view/info_cuenta.php';
}
