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
<?php
require "barraNavegacion.php";
?>

  <div class="container">
    <?php
    require "conexion.php";
    $consulta = "SELECT archivos.idArchivos,archivos.nombre,archivos.descripcion,archivos.ruta,archivos.poster, archivos.clicks, categorias.nombreCategoria from archivos inner join categorias on archivos.idcategoria = categorias.idCategoria WHERE nombre LIKE '" . $_POST['buscar'] . "%' OR nombre LIKE '%" . $_POST['buscar'] . "%' OR nombre LIKE '%" . $_POST['buscar'] . "'";
    $registro = mysqli_query($conexion, $consulta);
    /*$total = mysqli_num_rows($registro); */
    if ($resultado = mysqli_fetch_array($registro)) {
      do {

        ?>
    <h3 class="block"><strong><?php echo $resultado['nombre']; ?></strong></h3>
    <div class="row align-items-center">
      <video class="col-lg-8 col-sm-12 col-xm-12 justify-content-center" src=" <?php echo $resultado['ruta']; ?>" controls preload poster=" <?php echo $resultado['poster']; ?>"></video>
      <div class="col-lg-4 col-sm-12 alert alert-dismissible alert-secondary">
        <h4 class="block">Sipnosis</h4>
        <p class="block"> <?php echo $resultado['descripcion']; ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-sm-12 col-xm-12 justify-content-center"></div>
      <div class="col-lg-4 col-sm-12">
        <p class="block">Categoria:&nbsp <?php echo $resultado['nombreCategoria']; ?></p>
      </div>
    </div>
    <hr><br>
    <?php

  } while ($resultado = mysqli_fetch_array($registro));
} else {
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
