<?php
    require_once __DIR__ . '/../model/connectDB.php';
    require_once __DIR__ . '/../model/lista_categorias.php';

    $categorias = getCategories();
     

    foreach ($categorias as $id => $categoria) {  //$key => $value
        
        //Filtraje de datos (Del nombre de las categorias)
        $categorias[$id]['nom'] = htmlentities($categoria['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

    }

    require_once __DIR__ . '/../view/lista_categorias.php';

    //Utilizamos esta variable para comprobar que se filtraba correctamente un input de htmlentities
    //$string = "<script>alert('TDIW');</script>";

?>