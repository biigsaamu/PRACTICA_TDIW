<?php

require_once __DIR__ . '/../model/inicio_sesion.php';


if (!isset($_SESSION['user_id'])) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $filters = filter_input_array(
            INPUT_POST,
            [
                'email' => FILTER_DEFAULT,
                'pwd' => FILTER_DEFAULT,

            ]
        );

        $email = $filters['email'];
        $password = $filters['pwd'];

        //Verificamos datos de inicio de sesión. Si son correctos devuelve array con info del user
        $user = getUserInfoToLogIn($email);

        if ($user != null) {
            //Se verifica que la contraseña pasada a través del form, mediante post, coindice con 
            //la "hashed" password de la BD correspondiente al usuario
            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id']; //Creamos sesión con identificador de usuario
                $_SESSION['carrito'] = array(); //Creamos carrito de sesión 

            } else {
                $error_message = array();
                array_push($error_message, "La contraseña es incorrecta");
            }

        } else {
            $error_message = array();
            array_push($error_message, "Email incorrecto");
        }

        require_once __DIR__ . '/../view/inicio_sesion_mensaje.php';
        
    } else {

        require_once __DIR__ . '/../view/inicio_sesion.php';
    }
}
