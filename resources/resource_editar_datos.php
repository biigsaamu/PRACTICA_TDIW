<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8"> 
	<title> Pràctiques TDIW</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" title="main" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="/js/funcions.js"></script>
</head>

<body>
    <script>
        $(document).ready(function() {
            ocultarUserMenu();
        });
    </script>
    <?php require __DIR__ . '/../controller/header.php'; ?>
    <div id="subsPage">
        <?php require __DIR__ . '/../controller/editar_datos_cuenta.php'; ?>
        </div>
        <div id="subFooter">
			<?php require __DIR__ . '/../controller/footer.php'; ?>
		</div>
    </body>

</html>