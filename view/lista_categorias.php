<!--Flexbox categorias libros-->
<section class="categorias_productos_contenedor">

    <!--Flexbox categorias libros-->
    <section class="categoria_libros_contenedor">

        <h2 class="titulo_categoria">Categorias</h2>
        <div class="libros_contenedor">

            <?php
            foreach ($categorias as $categoria) { ?>

                <div class="tarjeta">
                        <div class="libro" id="<?php echo $categoria['id'] ?>." onclick="loadBooks(<?php echo $categoria['id'] ?>)">
                            <img src="img/<?php echo $categoria['img'] ?>" alt="<?php echo $categoria['nom'] ?>">
                            <div class="content">
                                <h3><?php echo $categoria['nom'] ?></h3>
                            </div>
                        </div>
                    
                </div>

            <?php } ?>


    </section>
    
    <div id="libros_categoria"></div>

</section>

<!-- JQUERY MENU
<div class="text-center"></div>

<div class="container pull-left">
		<div class="row">
			<div class="col-3"><button id="button-hide-elements">HIDE ELEMENTS</button></div>
			<div class="col-3"><button id="button-background">CHANGE BACKGROUND COLOR</button></div>
			<div class="col-3"><button id="button-text-ajax">AJAX</button></div>
            <div class="col-3">
                <div id="button-hover">Hover
                    <div id="show">Múestrame</div>
                </div>
            </div>
		</div>
	</div>

<script type="text/javascript">

        console.log('EJECUTANDO JS');

    	$(document).ready(function(){

            $('#button-hide-elements').click(function(){
				$('li').toggle('slow');
			});

			$('#button-background').click(function() {
				$('li').css('background-color', 'red');

			});

            $('#button-text-ajax').click(function(){
                var buttonName = $('this').attr('id');
                console.log(buttonName);
                $('.text-center').load('index.php?action=logout');
                console.log('load completed!');
            });

            $('#show').toggle();

            $('#button-hover').hover(function(){
                var buttonName = $('this').attr('id');
                console.log(buttonName);
                $('#show').toggle();
            });


        });
</script>
-->


