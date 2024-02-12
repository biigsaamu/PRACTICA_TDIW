<div class="layout_carrito">
    <?php
    $totalCompra = 0.0;
    $numProducts = 0;

    if (empty($_SESSION['carrito'])) {
    ?>
        <div class="carrito_contenedor">No hay productos en el carrito</div>
    <?php } else { ?>
        <div class="carrito_contenedor">
            <?php
            foreach ($_SESSION['carrito'] as $prod) {
            ?>
                <div class="carrito_producto">
                    <img src="/img/<?php echo $prod['img']; ?>" alt="img">
                    <div class="product_detail">
                        <div><?php echo $prod['nom_producte']; ?></div>
                        <div>€ <?php echo $prod['preu']; ?></div>
                        <div class="product_options">
                            <button class="add_substract_button" onclick="modifyQuantity('+', <?php echo $prod['id']; ?>)">+</button>
                            <div id="product_<?php echo $prod['id']; ?>_quantity"><?php echo $prod['cantidad']; ?></div>
                            <button class="add_substract_button" onclick="modifyQuantity('-', <?php echo $prod['id']; ?>)">-</button>
                        </div>
                    </div>
                    <button class="red_cross" onclick="romoveProductFromCart(<?php echo $prod['id']; ?>)">x</button>
                </div>

            <?php
                $numProducts++;
                $totalCompra += ($prod['preu'] * $prod['cantidad']);
            } ?>
        </div>
    <?php } ?>
    <div class="resumen_carrito">

        <div class="title_resumen_carrito"><strong>RESUMEN DEL CARRITO</strong></div>

        <div class="resumen_carrito_linia">
            <div>Número de productos:</div>
            <div><?php echo $numProducts; ?></div>
        </div>

        <div class="resumen_carrito_linia">
            <div>Entrega</div>
            <div>Gratis</div>
        </div>

        <div class="resumen_carrito_linia">
            <div>Total:</div>
            <div id="subs_total"><strong><?php echo $totalCompra; ?> €</strong></div>
        </div>

        <div class="resumen_carrito_linia">
            <?php if (!empty($_SESSION['carrito'])) : ?>
                <button id="boton_comprar" class="boton_comprar" onclick="submitPurchase()">Comprar</button>
                <button id="boton_vaciar" class="boton_vaciar" onclick="vaciarCarrito()">Vaciar carrito</button>
            <?php endif; ?>
        </div>

        <?php if (empty($_SESSION['carrito'])) : ?>
            <div class="continue_purchase">
                <a href="index.php" class="boton">Seguir comprando</a>
            </div>
        <?php else : ?>
            <div class="continue_purchase">
                <a href="index.php" class="boton">Mirar más libros</a>
            </div>
        <?php endif; ?>



    </div>

</div>