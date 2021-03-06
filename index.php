<!DOCTYPE html>
<html lang="es">
<head>
	<?php include_once('./template/head.php') ?>
	<title>SYN - Inicio</title>
</head>
<body class="hold-transition theme-primary bg-login">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg container-login">
							<div class="content-top-agile p-20 pb-0">
								<img class="logo_ubbitt" src="./assets/images/syn/logo/LOGO_UBBITT.svg" alt="logo" width="200">
								<p class="mb-0 c-header">Ingresa tus datos para continuar.</p>
							</div>
							<div class="p-40 pt-10">
								<form>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent border-right-0 brd-gray font-size-16">
													<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
												</span>
											</div>
											<input id="user" type="text" class="form-control pl-10 bg-transparent border-left-0 brd-gray" name="usuario" placeholder="Nombre de usuario">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text brd-gray bg-transparent border-right-0 font-size-16"><i class="fa fa-lock"></i></span>
											</div>
											<input id="pass" type="password" class="form-control brd-gray pl-15 bg-transparent border-left-0" name="password" placeholder="Password">
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center pos-check">
											<div class="form-check p-0 prt-10">
												<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
												<label class="form-check-label" for="defaultCheck1">
													<span class="font-size-14 c-gray">Acepto <a href="#" class="c-terminos">T??rminos y Condiciones</a></span>
												</label>
											</div>
										</div>
										<div class="col-12 text-center p-20 pb-0">
											<a href="clientes.php" class="btn btn-first mt-10 c-white font-weight-800 col-md-7 text-uppercase">iniciar sesi??n</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="cambioPassword" tabindex="-1" role="dialog" aria-labelledby="cambioPasswordTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
				</div>
				<div class="modal-body">
					<div class="text-center p-25">
						<h4 class="c-header font-weight-800">Ayuda con la contrase??a</h4>
						<p class="c-header">Introduce tu correo electr??nico <br> para que un agente de RH pueda modificar la contrase??a</p>
						<input type="text" class="col-10 m-auto">
						<div class="col-12 text-center mt-20">
							<button type="button" class="btn btn-first col-6 c-white font-weight-800" data-dismiss="modal" data-toggle="modal" data-target="#cambioEnviado">Continuar</button>
						</div>
						<div class="col-12 text-center mt-20">
							<button type="button" class="btn btn-second col-6 c-white font-weight-800" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="cambioEnviado" tabindex="-1" role="dialog" aria-labelledby="cambioEnviadoTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
				</div>
				<div class="modal-body">
					<div class="text-center p-25">
						<h4 class="c-header font-weight-800">Tu solicitud se ha enviado exitosamente</h4>
						<p class="c-header">En breve recibir??s la nueva contrase??a en tu correo electr??nico</p>
						<div class="col-12 text-center mt-20">
							<button type="button" class="btn btn-first col-6 c-white font-weight-800" data-dismiss="modal">Aceptar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Vendor JS -->
	<script src="./assets/js/vendors.min.js"></script>
    <script src="./assets/icons/feather-icons/feather.min.js"></script>
</body>
</html>
