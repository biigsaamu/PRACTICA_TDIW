<div class="mensajes_contenedor">
    <?php if (isset($_SESSION['user_id'])) { ?>
        <div class="mensajeError">No se cerró correctamente la sesión</div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } else { ?>
        <div class="mensajeOK">Sesión cerrada correctamente</div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } ?>
</div>