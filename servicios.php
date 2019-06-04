<?php

    $titulo = 'Servicios';
    include 'templates/header.php';
    include 'templates/navegacion.php';

?>

    <!-- SECCIÓN SERVICIOS -->

    <section id="servicios-principal">

        <div class="container pt-4 px-0">
            <div class="row no-gutters">

                <div class="col-12 hero">
                    <img src="images/fondo-hero-servicios.jpg" alt="" class="img-fluid">
                    <h2 class="text-uppercase text-white font-montserrat d-none d-md-block py-3 px-5">Servicios</h2>
                </div>

            </div> <!-- .row -->
        </div> <!-- .container -->

        <div class="container pt-4">
            <div class="row">

                <!-- CONTENIDO PRINCIPAL SERVICIOS -->

                <main class="col-lg-8 pb-4 pt-1 pl-md-2 pr-md-4" id="contenido-servicios">

                    <h2 class="d-block d-md-none text-uppercase text-center font-montserrat">Servicios</h2>
                    
                    <div id="contenido-servicios">

                        <div class="card">
                            <div class="card-header" id="servicio-1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link font-montserrat" data-toggle="collapse" data-target="#descripcion-1" aria-expanded="true" aria-controls="#descripcion-1">
                                        Servicio 1
                                    </button>
                                </h2>
                            </div> <!-- .card-header -->
                            <div id="descripcion-1" class="collapse show" aria-labelledby="#servicio-1" data-parent="#contenido-servicios">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tenetur eos. Nobis est vitae repellat ad facere! Consequatur animi perferendis maiores fugit assumenda in molestias laborum dignissimos cumque cum, voluptatem nemo excepturi, nobis quasi atque molestiae nesciunt exercitationem temporibus. Perspiciatis quas hic repellendus veniam ducimus neque vero ullam facilis nobis?</p>
                                </div>
                            </div>
                        </div> <!-- .card -->

                        <div class="card">
                            <div class="card-header" id="servicio-2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link font-montserrat" data-toggle="collapse" data-target="#descripcion-2" aria-expanded="false" aria-controls="#descripcion-2">
                                        Servicio 2
                                    </button>
                                </h2>
                            </div> <!-- .card-header -->
                            <div id="descripcion-2" class="collapse" aria-labelledby="#servicio-2" data-parent="#contenido-servicios">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tenetur eos. Nobis est vitae repellat ad facere! Consequatur animi perferendis maiores fugit assumenda in molestias laborum dignissimos cumque cum, voluptatem nemo excepturi, nobis quasi atque molestiae nesciunt exercitationem temporibus. Perspiciatis quas hic repellendus veniam ducimus neque vero ullam facilis nobis?</p>
                                </div>
                            </div>
                        </div> <!-- .card -->

                        <div class="card">
                            <div class="card-header" id="servicio-3">
                                <h2 class="mb-0">
                                    <button class="btn btn-link font-montserrat" data-toggle="collapse" data-target="#descripcion-3" aria-expanded="false" aria-controls="#descripcion-3">
                                        Servicio 3
                                    </button>
                                </h2>
                            </div> <!-- .card-header -->
                            <div id="descripcion-3" class="collapse" aria-labelledby="#servicio-3" data-parent="#contenido-servicios">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tenetur eos. Nobis est vitae repellat ad facere! Consequatur animi perferendis maiores fugit assumenda in molestias laborum dignissimos cumque cum, voluptatem nemo excepturi, nobis quasi atque molestiae nesciunt exercitationem temporibus. Perspiciatis quas hic repellendus veniam ducimus neque vero ullam facilis nobis?</p>
                                </div>
                            </div>
                        </div> <!-- .card -->

                    </div> <!-- #contenido-servicios -->


                    <!-- GALERÍA SERVICIOS -->

                    <div id="imagenes-servicios" class="container pt-4">
                        <div class="row justify-content-center">
                            
                            <div class="col-12">
                                <h3 class="text-center">
                                    <span>Nuestros</span>
                                    <span class="font-irish d-block text-uppercase">Servicios</span> 
                                </h3>
                            </div>
                            
                            <div class="col-6 col-md-4">
                                <a href="#" data-target="#imagen-1" data-toggle="modal" class="hvr-float-shadow">
                                    <img src="images/galeria-servicios-1.jpg" alt="" id="Instalaciones 1" class="border rounded img-fluid">
                                </a>    
                            </div>
                            
                            <div class="col-6 col-md-4">
                                <a href="#" data-target="#imagen-2" data-toggle="modal" class="hvr-float-shadow">
                                    <img src="images/galeria-servicios-2.jpg" alt="" id="Instalaciones 2" class="border rounded img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-4">
                                <a href="#" data-target="#imagen-3" data-toggle="modal" class="hvr-float-shadow">
                                    <img src="images/galeria-servicios-3.jpg" alt="" id="Instalaciones 3" class="border rounded img-fluid">
                                </a>
                            </div>

                            <!-- MODALES GALERÍA -->

                            <div class="modal fade" id="imagen-1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="images/galeria-servicios-1.jpg" alt="Nuestras Instalaciones 1" class="img-fluid">
                                        </div> <!-- .modal-body -->
                                    </div> <!-- .modal-content -->
                                </div> <!-- .modal-dialog -->
                            </div> <!-- .modal -->

                            <div class="modal fade" id="imagen-2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="images/galeria-servicios-2.jpg" alt="Nuestras Instalaciones 2" class="img-fluid">
                                        </div> <!-- .modal-body -->
                                    </div> <!-- .modal-content -->
                                </div> <!-- .modal-dialog -->
                            </div> <!-- .modal -->

                            <div class="modal fade" id="imagen-3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="images/galeria-servicios-3.jpg" alt="Nuestras Instalaciones 3" class="img-fluid">
                                        </div> <!-- .modal-body -->
                                    </div> <!-- .modal-content -->
                                </div> <!-- .modal-dialog -->
                            </div> <!-- .modal -->

                        </div> <!-- .row -->
                    </div> <!-- #imagenes-servicios .container -->
                        
                </main>

                <!-- SECCIÓN ASIDE -->
                <aside class="col-lg-4 p-4 d-none d-lg-block align-self-start" id="aside-servicios">
                    <div class="sidebar text-center">

                        <!-- ASIDE SERVICIOS -->
                        <h1 class="font-weight-bold pt-4">NUEVOS CLIENTES</h1>
                        <h6 class="h5">NO OLVIDEN SU REGALO</h6>
                        <p class="h6 mb-0">Recibe 20% de descuento con este cupón</p>
                        
                        <div id="cupon" class="py-2 mt-5">
                            <p class="text-uppercase text-center mb-0">
                                <span class="h2 d-block">
                                    20% de descuento
                                </span>
                                <span class="font-irish h4">
                                    En todos los servicios
                                </span>
                                <span class="h4">20%OFFHOUR</span>
                            </p>
                        </div>

                
                    </div> <!-- .sidebar -->
                </aside>

            </div> <!-- .row -->
        </div> <!-- .container -->

    </section>

<?php
    include 'templates/happy-hour.php';
    include 'templates/footer.php';

?>