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
		  <div class="h-100v">
			  	<div class="col-md-12 pr-0 pl-0 h100">
					<div class="h100 mt-50">
                        <h3 class="c-header font-weight-bold text-center">Nuevo reporte de calidad</h3>
                        <div class="col-md-6 mx-auto text-center div-white pt-15 pb-15 rounded mt-30">
                            <img src="./assets/images/syn/cargar_reporte@2x.png" alt="file" width="200">
                            <div class="mt-4">
                                <form>
                                    <div class="custom-file col-10">
                                        <label class="custom-file-label" id="nameFile1" for="f02">Seleccione su archivo</label>
                                        <input id="reporteCalidad" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="custom-file-input" id="customFile1" name="file">
                                        <i style="display: none;" id="msjFile1">Formato válido para los archivos: xslx, xsl.</i>
                                        <i style="display: none;" id="msjFilePeso1">El peso máximo para el archivo es de: 2M</i>
                                    </div>
                                    <button class="btn btn-first c-white col-md-6 mt-15 mb-5">Subir</button>
                                </form>
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
        var archivo = document.getElementById('reporteCalidad');

        archivo.addEventListener('change', function(e) {
            var file = e.target.files[0];
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length){
                return;
            }
            createImage(files[0]);
        });
        function createImage(file) {
            siTodoBien(file.name)
        };
        function siTodoBien(nombre){
            document.getElementById('nameFile1').innerHTML = nombre;
            document.getElementById('msjFile1').style.cssText="display: none";
            document.getElementById('msjFilePeso1').style.cssText="display: none";
        }

        window.onload = function() {
            let header = document.getElementById('encabezado');
            let menu = document.querySelector('.sidebar-menu');
            menu.children[1].classList.add('active');
			header.textContent = 'Carga de reporte de calidad';
		};
    </script>
</body>
</html>
