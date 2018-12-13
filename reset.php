<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ComFlix - Nueva Contraseña</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
						<div class="row justify-content-center">
								<a href="/">
							<img src="img/logo2.svg" alt="logo" style="width: 400px; height: 110px;">
								</a>
						</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Restablecer contraseña</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="new-password">Nueva contraseña</label>
									<input id="new-password" type="password" class="form-control" name="password" required autofocus data-eye>
									<div class="invalid-feedback">
										Contraseña requerida
									</div>
									<div class="form-text text-muted">
										Asegúrese de que su contraseña sea fuerte y fácil de recordar.
									</div>
								</div>

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

	<script src="js/jquery.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>