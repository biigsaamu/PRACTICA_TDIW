<section class="cuenta_contenedor">
    <div class="titulo">Datos de la cuenta</div>
    <div class="contenedor_horizontal">
        <form method="post" action="/index.php?action=editar_datos">
            <div class="info_cuenta_contenedor">

                <div class="info_contenedor">
                    <div class="blue">Información de la cuenta</div>
                    <div class="info">
                        <div class="info_cuenta_linia">
                            <div><strong>Nombre</strong></div>
                            <input required id="name" name="name" type="text" pattern="[A-Za-zÁ-Úá-ú\s]+" placeholder="<?php echo $datosCuenta['nom']; ?>" value="<?php echo $datosCuenta['nom']; ?>">
                        </div>

                        <div class="info_cuenta_linia">
                            <div><strong>Email</strong></div>
                            <input required type="email" name="email" placeholder="<?php echo $datosCuenta['email']; ?>" value="<?php echo $datosCuenta['email']; ?>">
                        </div>

                        <div class="info_cuenta_linia">
                            <div><strong>Contraseña actual</strong></div>
                            <input id="current_pwd" name="current_pwd" type="password" pattern="^(?=.*[A-Za-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$" placeholder="* Solo en caso de querer cambiar la contraseña" value="">
                        </div>

                        <div class="info_cuenta_linia">
                            <div><strong>Nueva contraseña</strong></div>
                            <input id="new_pwd" name="new_pwd" type="password" pattern="^(?=.*[A-Za-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$" placeholder="* Solo en caso de querer cambiar la contraseña" value="">
                        </div>

                        <div class="info_cuenta_linia">
                            <div><strong>Confirmar contraseña</strong></div>
                            <input id="confirm_pwd" name="confirm_pwd" type="password" pattern="^(?=.*[A-Za-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$" placeholder="* Solo en caso de querer cambiar la contraseña" value="">
                        </div>
                    </div>

                </div>


                <div class="info_contenedor">
                    <div class="blue">Información personal</div>
                    <div class="info">

                        <div class="info_cuenta_linia">
                            <div><strong>Dirección</strong></div>
                            <input required id="adress" name="adress" type="text" maxlength="30" pattern="[A-Za-z0-9Á-Úá-ú,\s]+" placeholder="<?php echo $datosCuenta['direccio']; ?>" value="<?php echo $datosCuenta['direccio']; ?>">
                        </div>

                        <div class="info_cuenta_linia">
                            <div><strong>Población</strong></div>
                            <input required id="location" name="location" type="text" maxlength="30" pattern="[A-Za-zÁ-Úá-ú\s]+" placeholder="<?php echo $datosCuenta['poblacio']; ?>" value="<?php echo $datosCuenta['poblacio']; ?>">
                        </div>

                        <div class="info_cuenta_linia">
                            <div><strong>Código postal</strong></div>
                            <input required id="CP" name="CP" type="text" maxlength="5" pattern="\d{5}" placeholder="<?php echo $datosCuenta['codi_postal']; ?>" value="<?php echo $datosCuenta['codi_postal']; ?>">
                        </div>
                    </div>

                </div>

                <div class="edit_boton">
                    <input class="boton" type="submit" value="Guardar cambios">
                </div>

            </div>
        </form>

        <form method="post" action="/index.php?action=editar_img" enctype="multipart/form-data">
            <div class="img_edit">

                <div class="info_img_contenedor">

                    <div class="blue">Imágen de perfil</div>
                    <div class="user_img"><img src="<?php echo $filesPublicPath . $datosCuenta['img']; ?>" alt="profile_img"></div>

                </div>

                <div class="edit_boton">
                    <input type="file" id="profile_img" name="profile_img">
                    <input class="boton" type="submit" value="Subir foto">
                </div>
            </div>
        </form>

    </div>


    </div>

</section>