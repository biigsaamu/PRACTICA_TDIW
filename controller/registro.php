<?php

include_once __DIR__ . '/../model/connectDB.php';
include_once __DIR__ . '/../model/registro.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Se ha hecho clic en submit y se ha enviado el formulario

    //Validación datos del formulario
    $filters = filter_input_array(
        INPUT_POST,
        [
            'name' => FILTER_DEFAULT,
            'email' => FILTER_DEFAULT,
            'pwd' => FILTER_DEFAULT,
            'adress' => FILTER_DEFAULT,
            'location' => FILTER_DEFAULT,
            'CP' => FILTER_DEFAULT,

        ]
    );

    $name = $filters['name'];
    $email = $filters['email'];
    $password = $filters['pwd'];
    $adress = $filters['adress'];
    $location = $filters['location'];
    $postalCode = $filters['CP'];



    //Si se validan los datos se inyectan estos en la BD
    $registrado = registro($name, $email, $password, $adress, $location, $postalCode);

    include_once __DIR__ . '/../view/registro_mensaje.php';
} else {
    include_once __DIR__ . '/../view/registro.php';
}
