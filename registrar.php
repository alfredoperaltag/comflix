<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ComFlix - Registro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
						<div class="row justify-content-center">
								<a href="index.html">
							<img src="img/logo2.svg" alt="logo" style="width: 400px; height: 110px;">
								</a>
						</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Registro</h4>
							<form method="POST" action="consultaRegistrar.php" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="nombreUsuario">Nombre</label>
									<input id="nombreUsuario" type="text" class="form-control" name="nombreUsuario" required autofocus>
									<div class="invalid-feedback">
										Cual es tu nombre?
									</div>
								</div>

								<div class="form-group">
									<label for="apellidoPaterno">Apellido Paterno</label>
									<input id="apellidoPaterno" type="text" class="form-control" name="apellidoPaterno" required autofocus>
									<div class="invalid-feedback">
										Cual es tu apellido paterno?
									</div>
								</div>

								<div class="form-group">
									<label for="apellidoMaterno">Apellido Materno</label>
									<input id="apellidoMaterno" type="text" class="form-control" name="apellidoMaterno" required autofocus>
									<div class="invalid-feedback">
										Cual es tu apellido materno?
									</div>
								</div>

								<div class="form-group">
									<label for="email">Correo Electronico</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										Correo invalido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Contraseña</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Contraseña requerida
									</div>
								</div>
								<div class="form-group">
									<label for="password2">Confirmar Contraseña</label>
									<input id="password2" type="password" class="form-control" name="password2" required data-eye>
									<div class="invalid-feedback">
										Contraseña requerida
									</div>
								</div>

								<?php if (!empty($errores)) : ?>								
								<div class="alert alert-dismissible alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php echo $errores; ?>
									</div>
								<?php endif; ?>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">Estoy de acuerdo con los <a href="terminos_y_condiciones.html">Terminos y Condiciones</a></label>
										<div class="invalid-feedback">
											Necesitas aceptar los Terminos y Condiciones
										</div>
									</div>
								</div>

								<div class="form-group m-0">									
									<button  type="submit" class="btn btn-danger btn-block">
										Registrarme
									</button>
								</div>
								<div class="mt-4 text-center">
									Ya tienes una cuenta?  <a href="login.php"> Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2018 &mdash; ComFlix
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>