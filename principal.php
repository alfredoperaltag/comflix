<?php session_start();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title><?php echo $_GET['categoria'] ?></title>
  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/bootstrapdark.min.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
<?php
require "barraNavegacion.php";
?>

    <div class="container mt-5">     
        <div class="col mt-5">
          <div class="card-columns">
            <?php
            require "conexion.php";
            $consulta = mysqli_query($conexion, "SELECT Archivos.idArchivos,archivos.poster,archivos.nombre,archivos.descripcion,categorias.nombreCategoria FROM archivos inner join categorias on archivos.idcategoria = categorias.idCategoria WHERE categorias.nombreCategoria = \"" . $_GET['categoria'] . "\"");
            while ($registro = mysqli_fetch_array($consulta)) {
              ?>
            <div class="card border-danger ">
              <a href="reproductor.php?idArchivos=<?php echo $registro['idArchivos']; ?>">
                <img src="<?php echo $registro['poster']; ?>" class="card-img-top img-fluid tarjeta" style="height: 150px;">
              </a>
              <div class="card-body">
                <h3 class="title"><?php echo $registro['nombre']; ?></h3>
                <p class="card-text"><?php echo $registro['descripcion']; ?></p>
              </div>
            </div>
            <?php 
          } ?>

          </div>
        </div>      
    </div>

  <footer>
  </footer>

  <!-- Jquery -->
  <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>

</html>
