<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ----------------------------------------- FAVICON ----------------------------------------------- -->

    <link rel="shortcut icon" type="image/png" href="images/favicon-1.png">

    <!-- ----------------------------------- FUENTES PERSONALIZADAS --------------------------------------- -->

    <link href="https://fonts.googleapis.com/css?family=Irish+Grover" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">

    <!-- ----------------------------------- CARGA DE ARCHIVOS CSS --------------------------------------- -->

    <!-- Archivos Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Archivo all.css de Font Awesome -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Archivo all.css de Animate -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Archivo all.css de hover-min -->
    <link rel="stylesheet" href="css/hover-min.css">

    <!-- Archivo CSS de Swiper -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Archivo CSS de VenoBox -->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- Archivo CSS de Jarallax -->
    <link rel="stylesheet" href="css/jarallax.css">

    <!-- Archivo CSS de Pickadate -->
    <link rel="stylesheet" href="js/pickadate/themes/default.css">

    <!-- Archivo CSS de Datepicker -->
    <link rel="stylesheet" href="js/pickadate/themes/default.date.css">

    <!-- Archivo CSS de Timepicker -->
    <link rel="stylesheet" href="js/pickadate/themes/default.time.css">

    <!-- Archivo de estilos CSS personalizado -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- -------------------------------------- TITULO DEL DOCUMENTO ----------------------------------------- -->

    <title>Irish Coffee Co. | El sabor de Irlanda</title>

</head>

<!-- --------------------------------------- INICIA CÓDIGO HTML5 ---------------------------------------------- -->

<body>

    <!-- ENCABEZADO -->
    <header id="encabezado">

        <div class="container-fluid bg-light">
            <div class="row align-items-center">

                <div class="col-12 bg-primary p-1"></div>

                <div class="col-12 col-md-7 animated bounceInLeft pl-md-5 text-center text-md-left">
                    <a href="index.html"><img src="images/logo.svg" alt="Logo del Sitio" width="30%" class="img-fluid mx-auto "></a>
                </div> <!-- .col -->

                <div class="col-12 col-md-5 animated bounceInRight delay-1s">

                    <!-- BBARRA DE REDES SOCIALES -->
                    <nav id="redes-sociales" class="py-1 py-md-5 pr-md-5 d-none d-md-block">
                        <ul class="nav nav-tabs justify-content-around justify-content-md-between">
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://facebook.com"> <span class="sr-only">Facebook</span><i class="fab fa-facebook-square h2 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://instagram.com"> <span class="sr-only">Instagram</span><i class="fab fa-instagram h2 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://twitter.com"> <span class="sr-only">Twitter</span><i class="fab fa-twitter-square h2 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://pinterest.com"> <span class="sr-only">Pinterest</span><i class="fab fa-pinterest-square h2 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://youtube.com"> <span class="sr-only">Youtube</span><i class="fab fa-youtube h2 text-primary"></i></a></li>
                        </ul>
                    </nav>

                </div> <!-- .col -->

            </div> <!-- .row -->
        </div> <!-- .container -->

    </header>

    <!-- MENÚ DE NAVEGACIÓN -->

    <section id="menu-navegacion" class="font-weight-bold bg-secondary">

        <nav class="navbar navbar-expand-md navbar-dark px-5 py-0 py-md-1">
            <a class="navbar-brand" href="index.html">
                <img src="images/barra.svg" alt="" width="40" height="40" class="hvr-wobble-top">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones" aria-controls="opciones" aria-expanded="false" aria-label="Menú desplegable">
                <span class="boton-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="opciones">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active m-1">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="nosotros.html">Nosotros</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="servicios.html">Servicios</a>
                    </li>
                    <li class="nav-item dropdown m-1">
                        <a class="nav-link dropdown-toggle" href="#" id="menu-desplegable" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Productos</a>
                        <div class="dropdown-menu" aria-labelledby="menu-desplegable">
                            <a class="dropdown-item" href="productos.html">Bebidas calientes</a>
                            <a class="dropdown-item" href="productos.html">Bebidas fías</a>
                            <a class="dropdown-item" href="productos.html">Comida</a>
                            <a class="dropdown-item" href="productos.html">Postres</a>
                        </div>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="contacto.html">Contacto</a>
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

                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="card">
                            <a href="#">
                                <img src="images/cafe 1.jpg" alt="Producto 1" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 class="card-title font-irish text-uppercase">Producto 1</h3>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, consequatur?</p>
                                    <p class="precio mb-0 lead font-weight-bold">$55.00</p>
                                </div>
                            </a>
                        </div> <!-- .card -->
                    </div> <!-- .col-md-3 -->

                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="card">
                            <a href="#">
                                <img src="images/cafe 2.jpg" alt="Producto 2" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 class="card-title font-irish text-uppercase">Producto 2</h3>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, consequatur?</p>
                                    <p class="precio mb-0 lead font-weight-bold">$55.00</p>
                                </div>
                            </a>
                        </div> <!-- .card -->
                    </div> <!-- .col-md-3 -->

                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="card">
                            <a href="#">
                                <img src="images/cafe 3.jpg" alt="Producto 3" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 class="card-title font-irish text-uppercase">Producto 3</h3>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, consequatur?</p>
                                    <p class="precio mb-0 lead font-weight-bold">$55.00</p>
                                </div>
                            </a>
                        </div> <!-- .card -->
                    </div> <!-- .col-md-3 -->

                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="card">
                            <a href="#">
                                <img src="images/cafe 4.jpg" alt="Producto 4" class="card-img-top">
                                <div class="card-body text-center">
                                    <h3 class="card-title font-irish text-uppercase">Producto 4</h3>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, consequatur?</p>
                                    <p class="precio mb-0 lead font-weight-bold">$55.00</p>
                                </div>
                            </a>
                        </div> <!-- .card -->
                    </div> <!-- .col-md-3 -->

                </div> <!-- .row -->

        </div> <!-- .container -->

    </section>

    <!-- SECCIÓN HAPPY HOUR -->

    <section id="happy-hour" class="bg-secondary text-white text-center py-5 jarallax" data-jarallax data-speed="0.3">

      <picture class="jarallax-img"> 
        <source media="(min-width:1200px)" srcset="images/fondo-happy-hour-xl.jpg">
        <source media="(min-width:768px)" srcset="images/fondo-happy-hour-md.jpg">
        <img src="images/fondo-happy-hour.jpeg" alt="Fondo de sección te ayudamos" width="auto" class="img-fluid">
      </picture>

      <div class="container">
        <div class="row py-5">

          <div class="col-12">
            <h2 class="display-4 font-weight-bold">#HappyHour</h2>
            <p class="h5 mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus vel sequi repudiandae error consequuntur consequatur.</p>
            <a href="#" class="btn btn-primary">Nuestras promociones</a>
          </div>

        </div> <!-- .row -->
      </div> <!-- .container -->

    </section>

    <!-- FOOTER -->

    <footer id="pie-de-pagina" class="pt-5">

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-6 col-md-4 pb-4 pb-md-0">
                    <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                    <p class="text-justify px-3 px-sm-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium illum id consectetur odit atque velit culpa. Quaerat, commodi. Repudiandae, excepturi.</p>
                </div>

                <div class="col-6 col-md-4 pb-4 pb-md-0 text-center">
                    <h3 class="text-uppercase pb-4">Horario</h3>
                    <p>Lun-Vie: 8AM - 9PM</p>
                    <p>Sab-Dom: 8AM - 10PM</p>
                </div>

                <div class="col-6 col-md-4 pb-4 pb-md-0 text-center">
                    <h3 class="text-uppercase pb-4">Contacto</h3>
                    <p>Calle Londres 83, Monte Magno</p>
                    <p>91193 Xalapa, Ver.</p>
                    <nav id="redes-sociales-footer">
                        <ul class="nav justify-content-around justify-content-md-center">
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://facebook.com"> <span class="sr-only">Facebook</span><i class="fab fa-facebook-square h5 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://instagram.com"> <span class="sr-only">Instagram</span><i class="fab fa-instagram h5 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://twitter.com"> <span class="sr-only">Twitter</span><i class="fab fa-twitter-square h5 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://pinterest.com"> <span class="sr-only">Pinterest</span><i class="fab fa-pinterest-square h5 text-primary"></i></a></li>
                            <li class="nav-item"><a class="nav-link hvr-pulse" href="#http://youtube.com"> <span class="sr-only">Youtube</span><i class="fab fa-youtube h5 text-primary"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <hr class="w-100 mt-0">
                <p class="text-center">The Irish Coffee Co. &copy 2019. Todos los derechos reservados</p>

            </div> <!-- .row -->
        </div> <!-- .container -->

    </footer>

    <!-- ----------------------------------- CARGA DE ARCHIVOS JAVASCRIPT ----------------------------------- -->

    <!-- Archivos jQuery, Popper.js, Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Archivo JavaScript de Swiper para animaciones de sliders de imagenes-->
    <script src="js/swiper.min.js"></script>

    <!-- Archivo JavaScript de VenoBox para video de Youtube desplegable en pantalla -->
    <script src="js/venobox.min.js"></script>

    <!-- Archivo JavaScript de Jarallax para animación de imagen de fondo durante scroll-->
    <script src="js/jarallax.min.js"></script>

    <!-- Archivo JavaScript de jQuery.waypoints para lanzar una función al hacer scroll-->
    <script src="js/jquery.waypoints.min.js"></script>

    <!-- Archivo JavaScript de jQuery.counterup para animación de números ascendentes-->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- Archivo JavaScript de Picker.js Selector de fecha y hora -->
    <script src="js/pickadate/picker.js"></script>

    <!-- Archivo JavaScript de Picker.date.js Selector de fecha -->
    <script src="js/pickadate/picker.date.js"></script>

    <!-- Archivo JavaScript de Picker.date.js Selector de hora -->
    <script src="js/pickadate/picker.time.js"></script>

    <!-- Archivo JavaScript de Parsley para validación de formularios -->
    <script src="js/parsley.min.js"></script>

    <!-- Archivo JavaScript de traducción al español de Parsley -->
    <script src="js/parsley.es.js"></script>

    <!-- Archivo JavaScript de jQuery.stickit.min.js para la barra de navegación fija -->
    <script src="js/jquery.stickit.min.js"></script>

    <!-- Archivo JavaScript de Scroll2id.js para navegar por secciones con scroll automático -->
    <script src="js/jquery.malihu.PageScroll2id.min.js"></script>

    <!-- Archivo JavaScript personalizado -->
    <script src="js/index.js"></script>

</body>

</html>