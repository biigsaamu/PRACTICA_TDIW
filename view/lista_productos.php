<section class="productos_categoria_contenedor">

    <section class="categoria_libros_contenedor">

        <h2 class="titulo_categoria" id="<?php echo $categoria['id'] ?>"> <?php echo $categoria['nom'] ?> </h2>
        <div class="categoria_js" id="<?php echo $categoria['id'] ?>">
        <div class="libros_contenedor"> 
            <?php 
            foreach ($libros as $libro) {
            ?>
                <div class="tarjeta">
                    <div class="libro" id="<?php echo $libro['id'] ?>" onclick="loadBookDetails(<?php echo $libro['id'] ?>, <?php echo $categoria['id'] ?> )">
                        <img src="img/<?php echo $libro['img'] ?>" alt="<?php echo $libro['nom_producte'] ?>">
                        <div class="content_contenedor">
                            <div class="content"><?php echo $libro['nom_producte'] ?></div>
                            <div class="content"><strong>Precio: </strong><?php echo $libro['preu'] ?>€</div>
                        </div>

                    </div>
                </div>


            <?php } ?>
        </div>

    </section>

</section>
