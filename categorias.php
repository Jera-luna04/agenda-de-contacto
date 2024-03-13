<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="public/img/contacto.svg">
        <title>Categorias de Agenda</title>
        <?php require_once "dependencias.php"; ?>
    </head>

	<body>
	<div class="container">
		<?php require_once "menu.php"; ?>

		<div class="jumbotron">
			<h1 class="display-4">Categorias</h1>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
				<span class="fas fa-book"></span>  Agregar categoria
			</button>
			<hr class="my-4">
			
			<div id="cargaTablaCategorias"></div>

			<hr class="my-4">
			<p>Agenda de contacto 2024.<br>
			       by: Jeraldin Luna</p>		</div>

		<?php 
			require_once "vistas/categorias/modalAgregar.php";
			require_once "vistas/categorias/modalActualizar.php";  
		?>
	</div>

	<script src="public/js/categorias.js"></script>

	</body>
</html>