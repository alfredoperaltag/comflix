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
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="https://bootswatch.com/darkly/#">Comflitx</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
                        aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor03">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../index.html">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="https://bootswatch.com/darkly/#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://bootswatch.com/darkly/#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://bootswatch.com/darkly/#">About</a>
                            </li> -->
                        </ul>
                        <form class="form-inline my-2 my-lg-0" action="soloreproductor.php" method="POST">
                            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" name="peliculabuscada">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
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