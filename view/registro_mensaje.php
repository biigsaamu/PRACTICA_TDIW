<div class="mensajes_contenedor">
    <?php if ($registrado) { ?>
        <div class="mensajeOK">Usuario correctamente registrado</div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } else { ?>
        <div class="mensajeError">No se ha podido registrar al usuario</div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } ?>
</div>