<div class="mensajes_contenedor">
    <?php if ($isCreated) { ?>
        <div class="mensajeOK">Compra efectuada correctamente</div>
        <div>Comprueba tu correo electrónico para ver los detalles del pedido</div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } else { ?>
        <div class="mensajeError">Ocurrió un error durante la solicitud</div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } ?>
</div>