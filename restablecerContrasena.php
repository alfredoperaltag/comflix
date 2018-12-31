<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ComFlix - Olvido Password</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<div class="container">
		<section class="h-100">
			<div class="container h-100">
				<div class="row justify-content-md-center align-items-center h-100">
					<div class="card-wrapper">
						<div class="row justify-content-center">
							<a href="index.html">
								<img src="img/logo2.svg" alt="logo" style="width: 400px; height: 110px;">
							</a>
						</div>
						<div class="card fat">
							<div class="card-body">
								<h4 class="card-title">Olvido Contraseña</h4>
								<form method="POST" action="consultaRestablecerContrasena.php" class="my-login-validation" novalidate="">
									<div class="form-group">
										<label for="email">Correo Electronico</label>
										<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
										<div class="invalid-feedback">
											Correo invalido
										</div>
										<div class="form-text text-muted">
											Al hacer clic en "Restablecer contraseña", le enviaremos un enlace para restablecer la contraseña.
										</div>
									</div>
									<?php if (!empty($errores)) : ?>

								<div class="alert alert-dismissible alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php echo $errores; ?>
									</div>
								<?php endif; ?>
								<?php if (!empty($info)) : ?>
								<div class="alert alert-dismissible alert-info">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php echo $info; ?>
									</div>
								<?php endif; ?>

									<div class="form-group m-0">
										<button type="submit" class="btn btn-primary btn-block">
											Restablecer contraseña
										</button>
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
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>

</html>