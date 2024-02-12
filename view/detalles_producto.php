<!--Sección nombre libro-->
<section class="titulo_detalles">
    <h2>Detalles del producto</h2>
</section>
<!--Sección imagen libro-->
<section class="img_detalles">
    <img src="img/<?php echo $libro['img'] ?>" alt="<?php echo $libro['nom_producte'] ?>">
</section>
<!--Sección descripción libro-->
<section class="descripcion">
    <div class="descripcion_text"> <strong>Descripción</strong> <br>
        <?php echo $libro['descripcio'] ?></div>
</section>
<!--Sección info libro-->
<section class="info_libro">
    <div class="tarjeta_descripcion">
        <div class="line"><strong>Título:</strong> <?php echo $libro['nom_producte'] ?> </div>
        <div class="line"><strong>Autor:</strong> <?php echo $libro['autor'] ?> </div>
        <div class="line"><strong>Núm. páginas:</strong> <?php echo $libro['pagines'] ?> </div>
        <div class="line"><strong>Precio:</strong> <?php print_r($libro['preu']) ?> €</div>
        <div class="line"><strong>Categoria:</strong> <?php echo $categoria['nom'] ?></div>
        <div class="boton_contenedor">
            <?php if (isset($_SESSION['user_id'])) : ?>
                <button class="boton" onclick="addBookToCart(<?php echo $libro['id'] ?>)">AÑADIR AL CARRITO</button>
                <div class="product_quantity">
                    <strong>Cantidad: </strong>
                    <button class="add_substract_button" onclick="increaseQuantity()">+</button>
                    <div id="quantity">1</div>
                    <button class="add_substract_button" onclick="decreaseQuantity()">-</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>