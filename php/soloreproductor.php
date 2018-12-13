<?php
include "conexion.php";
$nombre = $_GET['nombre'];
$resultado = mysqli_query($conexion, "SELECT * FROM archivos WHERE nombre = '$nombre'")
or die("problemas en consultas: " . mysqli_error($conexion));
while ($registro = mysqli_fetch_array($resultado)) {
    $nombre = $registro['nombre'];
    $ruta = $registro['ruta'];
    $descripcion = $registro['descripcion'];
    $poster = $registro['poster'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reproductor de Video</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/video-js.min.css">
    <link rel="stylesheet" href="../bootstrap/css/video-skin.css">
</head>
<body style="background:-webkit-linear-gradient(rgb(127, 140, 141),#17202A);background:-moz-linear-gradient(rgb(127, 140, 141),#17202A);">

    <div class="row-12">
        <div class="col">
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
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10 col-xs-12"><!-- -md-10 col-sm-10 col-xs-12 -->
            <video id="my-video"  class="video-js vjs-fluid vjs-big-play-centered vjs-default-skin" controls preload="auto" poster="../<?php echo $poster; ?>" data-setup="{}" >
                <source src="../<?php echo $ruta; ?>" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> style="height:400px;width:400px;" -->
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
                <!-- <style>
            .video{
                /* max-width:600px;  */
                height:400px;
                width:100%;
            }
            </style> -->
            </video>

            </div>
        </div>
    </div>

    <div class="container">
        <!-- <div class="row">
            <div class="col">
                <h2><?php echo $nombre; ?></h2><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <article>
                    <p><?php echo $descripcion; ?></p>
                </article>
            </div>
        </div> -->

        <!-- <div class="card-header">Header</div> -->
        <div class="card border-danger mb-3">

        <div class="card-body">
            <h2 class="card-title"><?php echo $nombre; ?></h2>
            <p class="card-text"><?php echo $descripcion; ?></p>
        </div>
        </div>

        <!-- <div class="card">

        <div class="card-body">
        <h2 class="card-title"><?php echo $nombre; ?></h2>
            <p class="card-text"><?php echo $descripcion; ?></p>
        </div>
        </div> -->


    </div>


    <script src="../bootstrap/js/video.min.js"></script>
    <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>