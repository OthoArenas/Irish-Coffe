<!-- <?php

    //DEFINIR UN NOMBRE PARA CACHEAR
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php','',$archivo);

    //DEFINIR ARCHIVO PARA CACHEAR (PUEDE SER .PHP TAMBIÉN)
    if(isset($_GET['id'])){
        $archivoCache = 'cache/'.$pagina.'-'.$_GET['id'].'html';
    }else{
        $archivoCache = 'cache/'.$pagina.'.html';
    }

    //CUANTO TIEMPO DEBERÁ ESTAR ESTE ARCHIVO ALMACENADO
    $tiempo = 36000;

    //CHECAR QUE EL ARCHIVO EXISTA, EL TIEMPO SEA EL ADECUADO Y MUESTRALO
    if(file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)){
        include ($archivoCache);
        exit;
    }
    //SI EL ARCHIVO NO EXISTE, O EL TIEMPO DE CACHEO YA VENCIÓ, GENERA UNO NUEVO
    ob_start();

?> -->

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

    <title>Irish Coffee Co. | <?php echo $titulo;?></title>

</head>

<!-- --------------------------------------- INICIA CÓDIGO HTML5 ---------------------------------------------- -->

<body>

    <!-- ENCABEZADO -->
    <header id="encabezado">

        <div class="container-fluid bg-light">
            <div class="row align-items-center">

                <div class="col-12 bg-primary p-1"></div>

                <div class="col-12 col-md-7 animated bounceInLeft pl-md-5 text-center text-md-left">
                    <a href="index.php"><img src="images/logo.svg" alt="Logo del Sitio" width="30%" class="img-fluid mx-auto "></a>
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