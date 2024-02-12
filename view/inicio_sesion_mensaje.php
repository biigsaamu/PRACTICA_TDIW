<div class="mensajes_contenedor">
    <?php if (isset($_SESSION['user_id'])) { ?>
        <div class="mensajeOK">Sesión iniciada correctamente</div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } else { ?>
        <div class="mensajeError">No se ha podido iniciar sesión. 
            <?php if (isset($error_message)) : echo $error_message[0]; endif; ?>
        </div>
        <a href="index.php" class="boton">Vuelve al inicio</a>
    <?php } ?>
</div>