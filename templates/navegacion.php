    <!-- MENÚ DE NAVEGACIÓN -->

    <section id="menu-navegacion" class="font-weight-bold bg-secondary">

        <nav class="navbar navbar-expand-md navbar-dark px-5 py-0 py-md-1">
            <a class="navbar-brand" href="index.php">
                <img src="images/barra.svg" alt="" width="40" height="40" class="hvr-wobble-top">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones" aria-controls="opciones" aria-expanded="false" aria-label="Menú desplegable">
                <span class="boton-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="opciones">
                <ul class="navbar-nav mr-auto">

                    <?php
                    
                        $archivo = basename($_SERVER['PHP_SELF']);
                        $pagina = str_replace('.php','',$archivo);

                    ?>

                    <li class="nav-item m-1 <?php echo 'index' === $pagina ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item m-1 <?php echo 'nosotros' === $pagina ? 'active' : '' ?>">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item m-1 <?php echo 'servicios' === $pagina ? 'active' : '' ?>">
                        <a class="nav-link" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item dropdown m-1 <?php echo 'productos' === $pagina ? 'active' : '' ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="menu-desplegable" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Productos</a>
                        <div class="dropdown-menu" aria-labelledby="menu-desplegable">
                            <a class="dropdown-item" href="productos.php">Bebidas calientes</a>
                            <a class="dropdown-item" href="productos.php">Bebidas frías</a>
                            <a class="dropdown-item" href="productos.php">Comida</a>
                            <a class="dropdown-item" href="productos.php">Postres</a>
                        </div>
                    </li>
                    <li class="nav-item m-1 <?php echo 'contacto' === $pagina ? 'active' : '' ?>">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item dropdown d-md-none m-1">
                        <a class="nav-link dropdown-toggle" href="#" id="menu-desplegable" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Redes Sociales</a>
                        <nav id="desplegable-redes" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="nav nav-tabs justify-content-around justify-content-md-between">
                                <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://facebook.com"> <span class="sr-only">Facebook</span><i class="fab fa-facebook-square h2 text-primary fa-fw"></i></a></li>
                                <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://instagram.com"> <span class="sr-only">Instagram</span><i class="fab fa-instagram h2 text-primary fa-fw"></i></a></li>
                                <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://twitter.com"> <span class="sr-only">Twitter</span><i class="fab fa-twitter-square h2 text-primary fa-fw"></i></a></li>
                                <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://pinterest.com"> <span class="sr-only">Pinterest</span><i class="fab fa-pinterest-square h2 text-primary fa-fw"></i></a></li>
                                <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://youtube.com"> <span class="sr-only">Youtube</span><i class="fab fa-youtube h2 text-primary fa-fw"></i></a></li>
                            </ul>
                        </nav>
                        
                    </li>
                </ul>
            </div> <!-- #opciones .collapse -->
        </nav>        

    </section>