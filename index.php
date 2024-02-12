<?php
session_start();

$action = $_GET['action'] ?? null; 

$filesAbsolutePath = '/home/TDIW/tdiw-l10/public_html/archivos/';
$filesPublicPath = 'archivos/';
//echo $action;

switch ($action) {
    case 'categorias':
        include __DIR__ . '/resources/resource_lista_categorias.php';
        break;
    
    case 'reg-user':
        include __DIR__ . '/resources/resource_registro.php';
        break;
    
    case 'login':
        include __DIR__ . '/resources/resource_inicio_sesion.php';
        break;
    
    case 'logout':
        include __DIR__ . '/resources/resource_logout.php';
        break;

    case 'carrito':
        include __DIR__ . '/resources/resource_carrito.php';
        break;
    
    case 'vaciar_carrito':
        include __DIR__ . '/controller/vaciar_carrito.php'; 
        break;
    
    case 'update_footer':
        include __DIR__ . '/controller/footer.php';
        break;
    
    case 'modify_product_quantity':
        include __DIR__ . '/controller/modify_product_quantity.php';
        break;

    case 'remove_product':
        include __DIR__ . '/controller/remove_product.php';
        break;

    case 'submit_compra':
        include __DIR__ . '/resources/resource_compra.php'; 
        break;

    case 'pedidos':
        include __DIR__ . '/resources/resource_pedidos.php'; 
        break;
    
    case 'info_cuenta':
        include __DIR__ . '/resources/resource_info_cuenta.php'; 
        break;
    
    case 'editar_cuenta':
        include __DIR__ . '/controller/editar_cuenta.php'; 
        break;
    
    case 'editar_datos':
        include __DIR__ . '/resources/resource_editar_datos.php'; 
        break;

    case 'editar_img':
        include __DIR__ . '/resources/resource_editar_img.php'; 
        break;

    case 'productos':
        include __DIR__ . '/resources/resource_lista_productos.php';
        break;
    
    case 'detalles_producto':
        include __DIR__ . '/resources/resource_detalles_producto.php';
        break;

    default:
        include __DIR__ . '/resources/resource_lista_categorias.php';
        break;
}
?> 