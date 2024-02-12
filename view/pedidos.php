<section class="pedidos_contenedor">
    <div class="titulo">Historial de pedidos</div>
    <div class="comandas_contenedor">
        <?php if ($comandas != null) {
            foreach ($comandas as $comanda) {
                if ($comanda['num_elements'] > 0) {?>
                    <div class="comanda">

                        <div class="comanda_id"><strong>#<?php echo $comanda['id']; ?></strong></div>
                        <div class="comanda_details">
                            <div><strong>Pedido realizado el:</strong> <?php echo $comanda['data_creacio']; ?></div>

                            <div><strong> Núm. Artículos: </strong><?php echo $comanda['num_elements']; ?></div>

                            <div class="products_contenedor">

                                <?php foreach ($comanda['prodcuts'] as $product) { ?>
                                    <div class="producto">
                                        <img src="/img/<?php echo $product['img']; ?>" alt="img">
                                        <div class="product_info">
                                            <div><em><?php echo $product['nom_producte']; ?></em></div>
                                            <div>Cantidad: <?php echo $product['quantitat']; ?></div>
                                            <div>Precio: <?php echo $product['preu_unitari']; ?> €</div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="right"><strong>Total: </strong><?php echo $comanda['import_total']; ?> €</div>
                        </div>

                    </div>
            <?php }
            }
        } else { ?>
            <div>No has realizado aún ningún pedido</div>
        <?php } ?>
    </div>

</section>