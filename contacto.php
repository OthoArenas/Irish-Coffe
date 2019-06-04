<?php

    $titulo = 'Contacto';
    include 'templates/header.php';
    include 'templates/navegacion.php';

?>

    <!-- SECCIÓN CONTACTO -->

    <section id="contacto-principal">

        <div class="container pt-4 px-0">
            <div class="row no-gutters">

                <div class="col-12 hero">
                    <img src="images/fondo-hero-contacto.jpg" alt="" class="img-fluid">
                    <h2 class="text-uppercase text-white font-montserrat d-none d-md-block py-3 px-5">Contacto</h2>
                </div>

            </div> <!-- .row -->
        </div> <!-- .container -->

        <div class="container pt-4">
            <div class="row justify-content-center">

                <!-- CONTENIDO PRINCIPAL CONTACTO -->

                <main class="col-lg-12 py-4 pl-md-2 pr-md-4" id="contenido-contacto">

                    <h2 class="d-block d-md-none text-uppercase text-center font-montserrat">
                        Contacto
                    </h2>
                    <!-- FORMULARIO CONTACTO -->
                    <form action="#" id="form-contacto" class="py-3">

                        <!-- CAMPO NOMBRE -->
                        <div class="form-group form-row" id="group-nombre">
                            <label for="nombre" class="col-form-label col-12 col-md-1">Nombre:</label>
                            <div class="col-12 col-md-11">
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-user fa-fw text-primary"></i></span> 
                                    </div>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" data-parsley-required data-parsley-length="[10, 40]" data-parsley-required-message="Ingrese su nombre" data-parsley-length-message="Ingrese su nombre completo" data-parsley-errors-container=".error-form-nombre">
                                </div>
                                <div class="error-form-nombre">
                                    <!-- Aquí se muestra el contenido del error de la validación -->
                                </div>
                            </div>
                        </div>

                        <!-- CAMPO EMAIL -->
                        <div class="form-group form-row">
                            <label for="email" class="col-form-label col-12 col-md-1">E-mail:</label>
                            <div class="col-12 col-md-11">
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text"><i class="fa fa-envelope fa-fw text-primary"></i></span> 
                                    </div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico" data-parsley-required data-parsley-required-message="Ingrese su correo electrónico" data-parsley-type-message="Ingrese un correo electrónico con formato válido" data-parsley-errors-container=".error-form-email"> 
                                </div>
                                <div class="error-form-email">
                                    <!-- Aquí se muestra el contenido del error de la validación -->
                                </div>
                            </div>
                        </div>

                        <!-- CAMPO MÓVIL -->
                        <div class="form-group form-row">
                            <label for="movil" class="col-form-label col-12 col-md-1">Móvil:</label>
                            <div class="col-12 col-md-11">
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-mobile-alt fa-fw text-primary"></i></span> 
                                    </div>
                                    <input type="text" class="form-control" name="movil" id="movil" placeholder="Ingrese su número de móvil" data-parsley-required data-parsley-length="[10, 15]" data-parsley-required-message="Ingrese su número de celular" data-parsley-length-message="El número de celular debe contener entre 10 y 15 dígitos" data-parsley-errors-container=".error-form-movil">
                                </div>
                                <div class="error-form-movil">
                                    <!-- Aquí se muestra el contenido del error de la validación -->
                                </div>
                            </div>
                        </div>

                        <!-- CAMPO MENSAJE -->
                        <div class="form-group form-row">
                            <label for="mensjae" class="col-form-label col-12 col-md-1">Mensaje:</label>
                            <div class="col-12 col-md-11">
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-comments  fa-fw text-primary"></i></span> 
                                    </div>
                                    <textarea name="mensaje" id="mensaje" rows="5" class="form-control" data-parsley-required data-parsley-required-message="Ingrese un mensaje indicando una breve descripción de su caso" data-parsley-errors-container=".error-form-mensaje"></textarea>
                                </div>
                                <div class="error-form-mensaje">
                                    <!-- Aquí se muestra el contenido del error de la validación -->
                                </div>
                            </div>
                        </div>

                        <!-- CAMPO ENVIAR -->
                        <div class="form-group form-row">
                            <div class="col-12 offset-md-1 col-md-11">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Enviar Datos</button>
                            </div>
                        </div>

                    </form>
                        
                </main>

            </div> <!-- .row -->
        </div> <!-- .container -->

    </section>

<?php

    include 'templates/footer.php';

?>