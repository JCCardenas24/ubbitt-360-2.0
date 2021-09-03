<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('./template/head.php') ?>
    <title>Carga de reporte</title>
    <link rel="stylesheet" href="./assets/css/file.css">
</head>
<body class="light-skin sidebar-mini theme-primary">
	<div class="wrapper">
		<?php include_once('./template/header.php') ?>
		<?php include_once('./template/side-menu.php') ?>
  		<div class="content-wrapper">
		    <div class="h-400">
			  	<div class="col-md-12 pr-0 pl-0 h100">
					<div class="mt-50 col-md-6 mx-auto mt-200 text-center div-white pd-20 rounded">
                        <img src="./assets/images/syn/warining.svg" alt="tick">
                        <h4 class="c-header font-weight-800 text-center text-uppercase mt-20">Error al cargar la base de datos</h4>
                        <h5 class="c-header font-weight-bold text-center mb-4">Verifique la estrucutra de la base de datos y vuelva a intentarlo</h5>
						<div class="text-center mt-30 mb-5">
							<a href="reporte-calidad.php" class="btn btn-first c-white col-3 font-weight-800">Continuar</a>
						</div>
					</div>
				</div>
	  		</div>
		</div>
		<?php include_once('./template/footer.php') ?>
	</div>
	<?php include_once('./template/scripts.php') ?>
	<script src="./assets/js/header.js"></script>
    <script>
		window.onload = function() {
            let header = document.getElementById('encabezado');
            let menu = document.querySelector('.sidebar-menu');
            menu.children[1].classList.add('active');
			header.textContent = 'Carga fallida';
		};
	</script>
</body>
</html>