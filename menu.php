<?php session_start();
include('conexion.php');
  // include('seleccionador_categorias.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Pagina principal</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrapdark.min.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/script.js" charset="utf-8"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#it-menu" aria-controls="it-menu" aria-expanded="false" aria-label="Menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="menu.php" class="logo">
          <img src="img/logo2.svg" style="width: 150px; height: 40px;">
        </a>
        <!-- <a href="#" class="navbar-brand">Comflix</a> -->
        <div class="collapse navbar-collapse" id="it-menu">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item">
              <a href="#" class="nav-link ">Inicio</a>
            </li> -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">Contenido</a>
              <div class="dropdown-menu menu" aria-labelledby="menu-categorias">
                <a href="principal.php?categoria=Accion" class="dropdown-item" >Acción</a>
                <a href="principal.php?categoria=Terror" class="dropdown-item">Terror</a>
                <a href="principal.php?categoria=Ciencia Ficcion" class="dropdown-item">Ciencia Ficción</a>
                <a href="principal.php?categoria=Animacion" class="dropdown-item">Animación</a>
                <a href="principal.php?categoria=Comedia" class="dropdown-item">Comedia</a>
                <a href="principal.php?categoria=Drama" class="dropdown-item">Drama</a>
                <a href="principal.php?categoria=Documentales" class="dropdown-item">Documentales</a>
                <a href="principal.php?categoria=Fantasia" class="dropdown-item">Fantasia</a>
                <a href="principal.php?categoria=Suspenso" class="dropdown-item">Suspenso</a>
                <a href="principal.php?categoria=Misterio" class="dropdown-item">Misterio</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="usuario-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
                <i class="icon-user"><?php echo $_SESSION['usuario']; ?></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="usuario-categorias">
                <a href="php/cerrarSesion.php" class="dropdown-item">Cerrar Sesión</a>
              </div>
            </li>
          </ul>

          <form class="form-inline" action="peliculaBuscada.php" method="post">
            <input type="text" class="form-control mr-2" placeholder="Buscar" name="buscar" value="">
            <button type="submit" class="btn btn-outline-danger" name="button">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
</header>

  <main>
    <div class="container mt-5">
      <div class="row mt-3 mb-3">
        <div class="col mt-5">
          <div class="card-columns">
            <?php
              // include 'seleccionador_categorias.php';
            require "conexion.php";
            $consulta = mysqli_query($conn, "SELECT Archivos.idArchivos,archivos.poster,archivos.nombre,categorias.nombreCategoria FROM archivos inner join categorias on archivos.idcategoria = categorias.idCategoria");
            while ($extraido = mysqli_fetch_array($consulta)) {
              ?>
            <div class="card border-danger ">
              <a href="php/reproductor.php?nombre=<?php echo $extraido['nombre']; ?>">
                <img src="<?php echo $extraido['poster']; ?>" class="card-img-top img-fluid tarjeta" style="height: 150px;">
              </a>
              <div class="card-body">
                <h3 class="title"><?php echo $extraido['nombre']; ?></h3>
                <p class="card-text"><?php echo $extraido['nombreCategoria']; ?></p>
              </div>
            </div>
            <?php

          }
          ?>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </main>

  <!-- Jquery -->
  <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
