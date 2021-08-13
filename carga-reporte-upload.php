<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('./template/head.php') ?>
    <title>Carga de reporte</title>
    <link rel="stylesheet" href="./assets/css/file.css">
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary">
	<div class="wrapper">
		<?php include_once('./template/header.php') ?>
		<?php include_once('./template/side-menu.php') ?>
  		<div class="content-wrapper">
		  <div class="h-400">
			  	<div class="col-md-12 pr-0 pl-0 h100 d-flex align-items-center">
					<div class="mt-50 col-md-6 mx-auto mt-200">
                        <h4 class="c-header font-weight-bold text-center">Cargando datos...</h4>
                        <h5 class="c-header font-weight-bold text-center mb-4">nombre-archivo.xlsx</h5>
                        <div class="progress">
                            <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active bg-blue rounded-0" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span id="current-progress"></span>
                            </div>
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
        var current_progress = 0;
        var interval = setInterval(function() {
            current_progress += 10;
            $("#dynamic").css("width", current_progress + "%").attr("aria-valuenow", current_progress).text(current_progress + "% Complete");
            if (current_progress >= 100)
                clearInterval(interval);
                window.location.href = 'file-load.php'
        }, 1000);
    </script>
</body>
</html>
