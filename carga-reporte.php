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
		  <div class="h-100v">
			  	<div class="col-md-12 pr-0 pl-0 h100">
					<div class="h100 mt-50">
                        <h3 class="c-header font-weight-bold text-center">Importa tus datos con UBBITT</h3>
                        <div class="col-md-6 mx-auto text-center div-white pt-15 pb-15 rounded mt-30">
                            <img src="./assets/images/syn/file.png" alt="file">
                            <div class="mt-4">
                                <p class="c-header h3 font-weight-bold d-block">Importar</p>
                                <p class="c-header">Importa información de contactos, negocios, tickets y productos a Ubbitt.</p>
                                <form>
                                    <div class="custom-file col-10">
                                        <label class="custom-file-label" id="nameFile1" for="f02">Seleccione su archivo</label>
                                        <input id="f02" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="custom-file-input" id="customFile1" name="file">
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
            // Primero capturamos la imagen, o archivo.
        var archivo = document.getElementById('f02');

        archivo.addEventListener('change', function(e) {
            var file = e.target.files[0];
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length){
                return;
            }
            createImage(files[0]);
        });

        // Esta funcion practicamente se explica sola.

        function createImage(file) {
            siTodoBien(file.name)
        };

        function siTodoBien(nombre){
            document.getElementById('nameFile1').innerHTML = nombre;
            document.getElementById('msjFile1').style.cssText="display: none";
            document.getElementById('msjFilePeso1').style.cssText="display: none";
        }

    </script>
</body>
</html>
