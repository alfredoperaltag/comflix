<?php 
require "funciones.php";
$obj = new funciones;
$obj->verificarSesion();
include "conexion.php";
$idArchivos = $_GET['idArchivos'];
$consulta = mysqli_query($conexion, "SELECT * FROM archivos WHERE idArchivos = '$idArchivos'")
    or die("problemas en consultas: " . mysqli_error($conexion));
while ($registro = mysqli_fetch_array($consulta)) {
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
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/video-js.min.css">
    <link rel="stylesheet" href="css/video-skin.css">
</head>

<body>
<?php
require "barraNavegacion.php";
?>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10 col-xs-12">
                <video-js id="my-video" class="video-js vjs-fluid vjs-big-play-centered vjs-default-skin" autoplay controls preload="auto" poster="<?php echo $poster; ?>" data-setup='{ "playbackRates": [0.5, 1, 1.5, 2] }'>
                    <source src="<?php echo $ruta; ?>" type='video/mp4'>                    
                    <p class="vjs-no-js">
                    Para ver este video, active JavaScript y considere actualizar a un navegador web que
                        <a href="https://videojs.com/html5-video-support/" target="_blank">soporta video HTML5</a>
                    </p>
                </video-js>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2><?php echo $nombre; ?></h2><br>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <article>
                    <p class="text-justify"><?php echo $descripcion; ?></p>
                </article>
            </div>
        </div>
    </div>

    <script src="js/video.min.js"></script>    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>