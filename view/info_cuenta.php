<section class="cuenta_contenedor">
    <div class="titulo">Datos de la cuenta</div>
    <div class="contenedor_horizontal">
        <div class="info_cuenta_contenedor">

            <div class="info_contenedor">
                <div class="blue">Información de la cuenta</div>
                <div class="info">
                    <div class="info_cuenta_linia">
                        <div><strong>Nombre</strong></div>
                        <div><?php echo $datosCuenta['nom']; ?>
                        </div>
                    </div>
                    <div class="info_cuenta_linia">
                        <div><strong>Email</strong></div>
                        <div><?php echo $datosCuenta['email']; ?>
                        </div>

                    </div>

                </div>
            </div>


            <div class="info_contenedor">
                <div class="blue">Información personal</div>
                <div class="info">

                    <div class="info_cuenta_linia">
                        <div><strong>Dirección</strong></div>
                        <div><?php echo $datosCuenta['direccio']; ?></div>
                    </div>

                    <div class="info_cuenta_linia">
                        <div><strong>Población</strong></div>
                        <div><?php echo $datosCuenta['poblacio']; ?></div>
                    </div>

                    <div class="info_cuenta_linia">
                        <div><strong>Código postal</strong></div>
                        <div><?php echo $datosCuenta['codi_postal']; ?></div>
                    </div>

                </div>
            </div>

        </div>

        <div class="img_edit">
            <div class="info_img_contenedor">

                <div class="blue">Imágen de perfil</div>
                <div class="user_img"><img src="<?php echo $filesPublicPath . $datosCuenta['img']; ?>" alt="profile_img"></div>

            </div>

            <div class="edit" onclick="goToProfileSetting(<?php echo $_SESSION['user_id']; ?>)">
                <div>Editar perfil</div>
                <img src="/img/EDIT_PROFILE.png" alt="user_icon">
            </div>

            <?php if (isset($updated)) {
                if ($updated) { ?>
                    <div class="mensajeOK">Los datos han sido actualizados correctamente</div>
                <?php } else { ?>
                    <div class="mensajeError">No he han podido actualizar los datos. <br> <?php echo $error_message[0]; ?> </div>
                <?php } ?>
            <?php } ?>

        </div>

    </div>

</section>