<footer class="footer">
    <?php if (isset($_SESSION['user_id'])) { ?>
        <div class="contenedor_footer" onclick="goToCartPage()">
            <div><strong>Libros en el carrito:</strong> <?php echo $carritoFooter['numProducts']; ?></div>
            <div><strong>Precio total:</strong> <?php echo $carritoFooter['totalPrice']; ?> €</div>
            <?php if (!empty($_SESSION['carrito'])) { ?>
                <div class="reciente">
                    <div><strong>Añadido recientemente: </strong></div>
                    <img src="img/<?php echo $carritoFooter['lastProduct']['img']; ?>">
                    <div><?php echo $carritoFooter['lastProduct']['nom_producte']; ?></div>
                </div>

            <?php } ?>
        </div>
    <?php }; ?>
</footer>