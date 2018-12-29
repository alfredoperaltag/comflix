<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- <link rel="icon" type="image/png" href="../imagenes/lupa.png"> -->
  <link rel="stylesheet" href="css/bootstrapdark.min.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Busqueda</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#it-menu" aria-controls="it-menu" aria-expanded="false" aria-label="Menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="../menu.php" class="logo">
          <img src="../img/logo2.svg" style="width: 150px; height: 40px;">
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

  <div class="container">
    <?php
      require "conexion.php";
      $query="SELECT archivos.idArchivos,archivos.nombre,archivos.descripcion,archivos.ruta,archivos.poster, archivos.clicks, categorias.nombreCategoria from archivos inner join categorias on archivos.idcategoria = categorias.idCategoria WHERE nombre LIKE '".$_POST['buscar']."%' OR nombre LIKE '%".$_POST['buscar']."%' OR nombre LIKE '%".$_POST['buscar']."'";
      $resultado = mysqli_query($conn,$query);
      $total = mysqli_num_rows($resultado);
      while($dato = mysqli_fetch_array($resultado)){
    ?>
    <h3 class="block"><strong><?php echo $dato['nombre']; ?></strong></h3>
    <div class="row align-items-center">
      <video class="col-lg-8 col-sm-12 col-xm-12 justify-content-center" src=" <?php echo $dato['ruta']; ?>" controls preload poster=" <?php echo $dato['poster']; ?>"></video>
      <div class="col-lg-4 col-sm-12 alert alert-dismissible alert-secondary">
        <h4 class="block">Sipnosis</h4>
        <p class="block"> <?php echo $dato['descripcion']; ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-sm-12 col-xm-12 justify-content-center"></div>
      <div class="col-lg-4 col-sm-12">
        <p class="block">Categoria:&nbsp <?php echo $dato['nombreCategoria']; ?></p>
      </div>
    </div>
    <hr><br>
    <?php
      }
      if($total==0)
      {
    ?>
    <br><br><br>
    <div class="row justify-content-center">
      <div class="col-auto">
        <br><br>
        <h5>No se han encontrado resultados</h5>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
   <!-- Jquery -->
  <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
