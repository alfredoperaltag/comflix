<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#it-menu" aria-controls="it-menu"
                aria-expanded="false" aria-label="Menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="menu.php" class="logo">
                <img src="img/logo2.svg" style="width: 150px; height: 40px;">
            </a>
            <div class="collapse navbar-collapse" id="it-menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown"
                            aria-haspopup="true" aria-expand="false">Contenido</a>
                        <div class="dropdown-menu menu" aria-labelledby="menu-categorias">
                            <a href="principal.php?categoria=Accion" class="dropdown-item">Acción</a>
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
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="usuario-categorias" data-toggle="dropdown"
                            aria-haspopup="true" aria-expand="false">
                            <i class="icon-user">
                                <?php echo $_SESSION['usuario']; ?></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="usuario-categorias">
                            <a href="cerrarSesion.php" class="dropdown-item">Cerrar Sesión</a>
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