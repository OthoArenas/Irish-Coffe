<?php

    if (isset($_GET['id'])) {
        if (filter_var($_GET['id'],FILTER_VALIDATE_INT)) {
            $producto_id = $_GET['id'];
        }else {
            header('Location: 404.html');
            exit;
        }
    }

    $titulo = 'Productos';
    include 'templates/header.php';
    include 'templates/navegacion.php';
    include 'inc/funciones.php';

    $resultado = obtenerProducto($producto_id);

    if ($resultado->num_rows > 0) {

        while ($producto = $resultado->fetch_assoc()) {

?>

        <!-- SECCIÓN PRODUCTO -->

        <section id="producto-principal">

            <div class="container pt-4 px-0">
                <div class="row no-gutters">

                    <div class="col-12 hero">
                        <img src="images/<?php echo $producto['imagen_completa']; ?>" alt="" class="img-fluid">
                        <h2 class="text-uppercase text-white font-montserrat d-none d-md-block py-3 px-5"><?php echo $producto['nombre']; ?></h2>
                    </div>

                </div> <!-- .row -->
            </div> <!-- .container -->

            <div class="container pt-4">
                <div class="row">

                    <!-- CONTENIDO PRINCIPAL NOSOTROS -->

                    <main class="col-lg-8 py-4 pl-md-2 pr-md-4" id="contenido-nosotros">

                        <h2 class="d-block d-md-none text-uppercase text-center font-montserrat">
                            <?php echo $producto['nombre']; ?>
                        </h2>
                        <p class="text-justify pt-4 pt-md-0">
                            <?php echo $producto['descripcion']; ?>
                        </p>
                            
                    </main>

                    <!-- SECCIÓN ASIDE -->
                    <aside class="col-lg-4 pt-4 pt-lg-0 d-none d-lg-block" id="aside-nosotros">
                        <div class="sidebar text-center">

                            <!-- ASIDE PRODUCTO -->
                            <h1 class="font-weight-bold pt-5">DESCRIPCIÓN</h1>
                            <p class="h6 mb-0">
                                <?php echo $producto['descripcion_corta']; ?>
                            </p>
                            <h2 class="mt-5">PRECIO</h2>
                            <p class="h2 font-montserrat p-3 my-3 font-weight-bold precio-lateral">
                                $<?php echo $producto['precio']; ?>
                            </p>
                    
                        </div> <!-- .sidebar -->
                    </aside>

                </div> <!-- .row -->
            </div> <!-- .container -->

        </section>

<?php

        } // FIN DEL WHILE
    }else{
        echo '<h2 class="pt-5 text-uppercase text-center font-montserrat">Producto No Encontrado</h2>';
    } // FIN DEL ELSE
    include 'templates/footer.php';

?>