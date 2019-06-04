<?php

    $titulo = 'El Sabor de Irlanda';
    include 'templates/header.php';
    include 'templates/navegacion.php';
    include 'inc/funciones.php';

?>

    <!-- SECCIÓN DE SLIDER PRINCIPAL -->

    <section id="slider-principal" class="swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide d-flex align-items-end" style="background-image: url(images/slider-1.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="display-4 font-weight-bold">Texto de Slider 1</h2>
                            <a href="#" class="btn btn-primary mb-5">Botón de Slider 1</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex align-items-end " style="background-image: url(images/slider-2.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11 col-md-12">
                            <h2 class="display-4 font-weight-bold">Texto de Slider 2</h2>
                            <a href="#" class="btn btn-primary mb-5">Botón de Slider 2</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex align-items-end" style="background-image: url(images/slider-3.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11 col-md-12">
                            <h2 class="display-4 font-weight-bold">Texto de Slider 3</h2>
                            <a href="#" class="btn btn-primary mb-5">Botón de Slider 3</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex align-items-end" style="background-image: url(images/slider-4.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11 col-md-12">
                            <h2 class="display-4 font-weight-bold">Texto de Slider 4</h2>
                            <a href="#" class="btn btn-primary mb-5">Botón de Slider 4</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex align-items-end" style="background-image: url(images/slider-5.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11 col-md-12">
                            <h2 class="display-4 font-weight-bold">Texto de Slider 5</h2>
                            <a href="#" class="btn btn-primary mb-5">Botón de Slider 5</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide d-flex align-items-end" style="background-image: url(images/slider-6.jpg)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-sm-11 col-md-12">
                            <h2 class="display-4 font-weight-bold">Texto de Slider 6</h2>
                            <a href="#" class="btn btn-primary mb-5">Botón de Slider 6</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- .swiper-wrapper -->

        <!-- Flechas para slider -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Paginación para slider -->
        <div class="swiper-pagination"></div>

        <!-- Scrollbar para slider -->
        <div class="swiper-scrollbar"></div>    

    </section>

    <!-- SECCIÓN BIENVENIDO -->

    <section id="bienvenido" class="text-center py-5">
        <h2 class="display-4">
            <span class="text-uppercase">Bienvenido a nuestro </span>
            <span class="font-irish d-block">Sitio Web</span>
        </h2>
        <p class="h4 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, sequi.</p>
    </section>

    <!-- SECCIÓN SERVICIOS -->

    <section id="servicios" class="pb-5">

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-6 col-md-4 text-center mb-3 mb-md-0">
                    <div class="imagen-servicio">
                        <img src="images/servicio-1.jpeg" alt="Servicio 1" class="img-fluid hvr-grow">
                        <div class="row justify-content-center no-gutters">
                            <div class="col-md-10 servicio-info">
                                <h3>
                                    <span>Conoce sobre</span>
                                    <span class="font-irish d-block text-uppercase">nosotros</span> 
                                </h3>
                                <a href="#" class="btn btn-primary btn-block mb-2">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 text-center mb-3 mb-md-0">
                    <div class="imagen-servicio">
                        <img src="images/servicio-2.jpg" alt="Servicio 2" class="img-fluid hvr-grow">
                        <div class="row justify-content-center no-gutters">
                            <div class="col-md-10 servicio-info">
                                <h3>
                                    <span>Conoce sobre</span>
                                    <span class="font-irish d-block text-uppercase">nosotros</span> 
                                </h3>
                                <a href="#" class="btn btn-primary btn-block mb-2">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 text-center">
                    <div class="imagen-servicio">
                        <img src="images/servicio-3.jpg" alt="Servicio 3" class="img-fluid hvr-grow">
                        <div class="row justify-content-center no-gutters">
                            <div class="col-md-10 servicio-info">
                                <h3>
                                    <span>Conoce sobre</span>
                                    <span class="font-irish d-block text-uppercase">nosotros</span> 
                                </h3>
                                <a href="#" class="btn btn-primary btn-block mb-2">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- .row -->
        </div> <!-- .container -->

    </section>

    <!-- SECCIÓN HORARIOS -->

    <section id="horarios" class="jarallax py-5 bg-secondary text-center text-md-left" data-jarallax>
      <picture class="jarallax-img">
        <source media="(min-width: 1200px)" srcset="images/fondo-horarios-xl.jpg">
        <source media="(min-width: 768px)" srcset="images/fondo-horarios-md.jpg">
        <img alt="Fondo de Sección Horarios" srcset="images/fondo-horarios.jpg" class="w-100">
      </picture>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 order-md-1">
            <h2 class="display-4 font-weight-bold text-white">HORARIOS</h2>
            <h6 class="text-white h5">TU MERECIDO BREAK</h6>
            <p class="text-white text-justify h5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Quos blanditiis possimus placeat consequuntur!</p>
            <div class="row text-center">
              <div class="col-12">
                  <a href="#" class="btn btn-primary mt-3">Conoce el menú</a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <table class="table table-hover text-center text-white mt-5">
              <thead>
                <tr>
                  <th>Día</th>
                  <th>De</th>
                  <th>Hasta</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Lunes</td>
                  <td>8:00</td>
                  <td>21:00</td>
                </tr>
                <tr>
                  <td>Martes</td>
                  <td>8:00</td>
                  <td>21:00</td>
                </tr>
                <tr>
                  <td>Miércoles</td>
                  <td>8:00</td>
                  <td>21:00</td>
                </tr>
                <tr>
                  <td>Jueves</td>
                  <td>8:00</td>
                  <td>21:00</td>
                </tr>
                <tr>
                  <td>Viernes</td>
                  <td>8:00</td>
                  <td>21:00</td>
                </tr>
                <tr>
                  <td>Sábado</td>
                  <td>8:00</td>
                  <td>22:00</td>
                </tr>
                <tr>
                  <td>Domingo</td>
                  <td>8:00</td>
                  <td>22:00</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div> <!-- .row -->
      </div> <!-- .container -->

    </section>

    <!-- SECCIÓN PRODUCTOS -->

    <section id="productos" class="py-5 productos">

        <div class="container">
            
                <h2 class="display-4 text-center pb-4">
                    <span>Nuestros</span>
                    <span class="font-irish d-block text-uppercase">Productos</span> 
                </h2>

                <div class="row">
                    <?php
                    
                        $productos = obtenerProductos(4);
                        
                        while ($producto = $productos->fetch_assoc()) {
                    
                    ?>

                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="card">
                            <a href="producto.php?id=<?php echo $producto['id']; ?>">
                                <img src="images/<?php echo $producto['imagen_mini']; ?>" alt="<?php echo $producto['nombre']; ?>" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 class="card-title font-irish text-uppercase">
                                        <?php echo $producto['nombre']; ?>
                                    </h3>
                                    <p class="card-text">
                                        <?php echo $producto['descripcion_corta']; ?>
                                    </p>
                                    <p class="precio mb-0 lead font-weight-bold">
                                        $<?php echo $producto['precio']; ?>  
                                    </p>
                                </div>
                            </a>
                        </div> <!-- .card -->
                    </div> <!-- .col-md-3 -->

                    <?php } ?>

                </div> <!-- .row -->

        </div> <!-- .container -->

    </section>

<?php

    include 'templates/happy-hour.php';
    include 'templates/footer.php';

?>
