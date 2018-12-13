<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ComFlix - Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
						<div class="row justify-content-center">
								<a href="/">
							<img src="../img/logo2.svg" alt="logo" style="width: 400px; height: 110px;">
								</a>
						</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="nombreUsuario">Nombre de Usuario</label>
									<input id="nombreUsuario" type="text" class="form-control" name="nombreUsuario" value="" required autofocus>
									<div class="invalid-feedback">
										Correo invalido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Contraseña
										<a href="resetpassword.php" class="float-right">
											Olvido la Contraseña?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Contraseña requerida
							    	</div>
								</div>
								<?php if (!empty($errores)): ?>
								
								<div class="alert alert-dismissible alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php echo $errores; ?>
									</div>
								<?php endif;?>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Recuerdame</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-danger btn-block">
										Entrar
									</button>
								</div>
								<div class="mt-4 text-center">
									No tienes una cuenta? <a href="registrate.php"> Registrate</a>
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

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/my-login.js"></script>
</body>
</html>
