<?php

    $titulo = 'Productos';
    include 'templates/header.php';
    include 'templates/navegacion.php';
    include 'inc/funciones.php'

?>

    <!-- SECCIÓN PRODUCTOS -->

    <section id="productos-principal">

        <div class="container pt-4 px-0">
            <div class="row no-gutters">

                <div class="col-12 hero">
                    <img src="images/fondo-hero-productos.jpg" alt="" class="img-fluid">
                    <h2 class="text-uppercase text-white font-montserrat d-none d-md-block py-3 px-5">Productos</h2>
                </div>

            </div> <!-- .row -->
        </div> <!-- .container -->

        <div class="container pt-4">
            <div class="row">

                <!-- CONTENIDO PRINCIPAL PRODUCTOS -->

                <main class="col-lg-12 py-4 pl-md-2 pr-md-4" id="contenido-productos">

                    <h2 class="d-block d-md-none text-uppercase text-center font-montserrat">
                        Productos
                    </h2>
                    
                    <div class="row productos">

                        <div class="card-columns">

                        <?php
                    
                            $productos = obtenerProductos(10);
                        
                            while ($producto = $productos->fetch_assoc()) {
                    
                        ?>

                            <div class="card">
                                <a href="producto.php?id=<?php echo $producto['id']; ?>">
                                    <img src="images/<?php echo $producto['imagen_mini']; ?>" alt="" class="card-img-top img-fluid">
                                    <div class="card-body">
                                        <h3 class="card-title text-center text-uppercase">
                                            <?php echo $producto['nombre']; ?>
                                        </h3>
                                        <p class="card-text text-uppercase">
                                            <?php echo $producto['descripcion_corta']; ?>
                                        </p>
                                        <p class="precio lead text-center mb-0">
                                            $<?php echo $producto['precio']; ?>
                                        </p>
                                    </div> <!-- .card-body -->
                                </a>
                            </div> <!-- .card -->

                            <?php } ?>

                        </div> <!-- .card-columns -->

                    </div> <!-- .row -->
                        
                </main>

            </div> <!-- .row -->
        </div> <!-- .container -->

    </section>

<?php

    include 'templates/footer.php';

?>