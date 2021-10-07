<!DOCTYPE html>
<html lang="es">

<head>
	<?php include_once('./template/head.php') ?>
	<title>Ubbitt 360</title>
</head>

<body class="theme-primary bg-login">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div id="login_container" class="bg-white rounded10 shadow-lg container-login">
							<div>
								<div class="content-top-agile">
									<img class="logo_ubbitt d-block m-auto" src="./assets/images/ubbitt_color.svg"
										alt="logo" width="200">
									<p class="mb-0 c-header">Ingresa tus datos para continuar.</p>
								</div>

								<form class="mt-10">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span
													class="input-group-text bg-transparent border-right-0 brd-gray font-size-16">
													<i class="icon-User"><span class="path1"></span><span
															class="path2"></span></i>
												</span>
											</div>
											<input id="user" type="text"
												class="form-control pl-10 bg-transparent border-left-0 brd-gray"
												name="usuario" placeholder="Nombre de usuario">
											<div class="invalid-feedback">
												
												<div class="wrapper_error_mesg">
													<i class="ri-error-warning-line"></i> Usuario incorrecto.
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span
													class="input-group-text brd-gray bg-transparent border-right-0 font-size-16"><i
														class="fa fa-lock"></i></span>
											</div>
											<input id="pass" type="password"
												class="form-control brd-gray pl-15 bg-transparent border-left-0"
												name="password" placeholder="Password">
											<div class="invalid-feedback">
												<div class="wrapper_error_mesg">
													<i class="ri-error-warning-line"></i> Password incorrecto.
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-center pos-check">
											<div class="form-check p-0 prt-10 pt-10">
												<input class="form-check-input" type="checkbox" value=""
													id="defaultCheck1" required>
												<label class="form-check-label" for="defaultCheck1">
													<span class="font-size-14 c-gray">Acepto <a
															href="aviso-privacidad-ubbit-360.php"
															class="c-terminos">Términos y Condiciones</a></span>
												</label>
												<div class="invalid-feedback">
													<div class="wrapper_error_mesg">
													<i class="ri-error-warning-line"></i> Acepta términos y condiciones.
												</div>
												</div>
											</div>
										</div>
										<a href="dashboard-freemium.php"
											class="btn_login btn btn-first mt-10 c-white font-weight-800 col-md-7 text-uppercase d-block mx-auto">iniciar
											sesión</a>
										<a id="btn_go_to_recover" class="wid-100  text-center d-block mx-auto">Olvidé mi
											contraseña</a>
									</div>
								</form>
							</div>
						</div>
						<div id="recovery_psw_container" style="display: none;">
							<div class="recovery_step_1">
								<h5>Recuperar contraseña</h5>
								<p>Ingresa tu correo electrónico y se te enviará un link para reestabecer tu contraseña
								</p>
								<div class="form-group">
									<label for="email_recovery_input">Email</label>
									<input type="email" class="form-control email_input" id="email_recovery_input"
										placeholder="test@gmail.com">
								</div>
								<a class="send_request_email">Enviar</a>
								<a class="cancel_request_email">Cancelar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Vendor JS -->
	<script src="./assets/js/vendors.min.js"></script>
	<script src="./assets/icons/feather-icons/feather.min.js"></script>
	<script>
		$("#btn_go_to_recover").click(function () {
			$("#login_container").toggle();
			$("#recovery_psw_container").toggle();
		});
		$(".send_request_email, .cancel_request_email").click(function () {
			$("#recovery_psw_container").toggle();
			$("#login_container").toggle();
		});
	</script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
			'use strict';
			window.addEventListener('load', function () {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function (form) {
					form.addEventListener('submit', function (event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>
</body>

</html>