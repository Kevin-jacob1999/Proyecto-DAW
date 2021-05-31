<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Milla | DAW 2021</title>
        <link href="<?=constant('URL')?>public/css/Style_System.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            require_once 'views/navbar.php';
        ?>
        <div id="layoutSidenav">
            <?php
                require_once 'views/sidebar.php';
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800 mt-4">Prueba</h1>
                        </div> 
                            <div class="row justify-content-center">
                            <!-- Area Chart -->
                            <div class="col-xl-9 col-lg-9">
                                <div class="card shadow mb-4">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <div class="card-header card-header-third rounded text-center">
                                                <h2 class="card-header-title mb-3 text-white">Sobre Nosotros</h2>
                                            </div>

                                            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                                                <div class="col-lg-6">
                                                    <img class="img-fluid rounded mb-4 mb-lg-0" src="<?=constant('URL')?>public/assets/Inicio.png" alt="..."/>
                                            </div>
                                            <div class="col-lg-6">
                                                <h1 class="font-weight-light">¿Qué es Milla?</h1><br><br>
                                                <p>
                                                Somos una empresa que se dedica a la compra y venta de bienes inmobiliario, 
                                                tales como casas, departamentos, oficinas, locales, brindamos el servicio de
                                                alquiler, cuestionamiento de crédito hipotecario, asesoramiento inmobiliario. 
                                                Contamos con años de experiencia en el mercado inmobiliario, que se integra valor
                                                los procesos de diseño, venta y servicio al cliente.<br><br>

                                                Nuestra mayor filosofía es estar comprometido en alcanzar el bienestar de las familias 
                                                y empresas, brindándoles un producto de calidad, dentro de los plazos previstos y con 
                                                un buen servicio post-venta. Milla, busca una mejora continua de los procesos y productos 
                                                a fin de lograr eficacia, eficiencia y valores en la organización. Lo que nos define como 
                                                profesionales es nuestro deseo de mejorar cada día, trabajando con calidad, conocimiento y 
                                                eficiencia para solucionar los requerimientos de nuestros clientes

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="row">
                                    <!--tarjeta 1-->
                                    <div class="col-lg-6 col-md-12 mb-4">
                                            <div class="card-section border rounded ml-4 mr-4">
                                            <div class="card-header card-header-second rounded">
                                                <h2 class="card-header-title mb-3 mt-1 text-white text-center"> Contacto </h2>
                                            </div>
                                            <div class="card-body text-center">
                                                <p class="card-text">
                                                    Para mayor información puede contactarnos al número que aparece a continuación, o puede escribirnos
                                                    nuestra redes sociales será un gusto atenderle.<br><br>
                                                    <i class="fas fa-phone-square-alt fa-lg mr-2"></i>  6053-9863<br><br>
                                                    <i class="fas fa-at fa-lg mr-2"></i> inmobiliariamilla35@gmail.com<br><br>
                                                    <i class="fab fa-facebook-square fa-lg mr-2"></i><a href="https://www.facebook.com/Inmobiliaria-Milla-101589628812684/" target="_blank"> Inmobiliaria Milla </a>
                                                </p>
                                                <br>    
                                                <button class="btn btn-lg btn-primary">Más info</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tarjeta 2-->
                                    <div class="col-lg-6 col-md-12 mb-4">
                                            <div class="card-section border rounded ml-4 mr-4">
                                            <div class="card-header card-header-second rounded">
                                                <h2 class="card-header-title mb-3 mt-1 text-white text-center">Ventas</h2>
                                            </div>
                                            <div class="card-body text-center">
                                                <p class="card-text">
                                                    Le ofrecemos producto con altos estándares de calidad, todos nuestros están respaldo 
                                                    por garantía además nuestra mayor prioridad que los clientes queden satisfecho compra 
                                                    y venta de producto que nosotros ofrecemos entre los productos que ofrecemos están: 
                                                    Casas, departamento, oficinas y locales. Además brindamos adquirir , asesoramiento 
                                                    inmobiliario.
                                                </p>
                                                <br>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </main>
                <?php
                    require_once 'views/footer.php';
                ?>
            </div>
        </div>
        <script src="<?=constant('URL')?>public/lib/jQuery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=constant('URL')?>public/js/scripts.js"></script>
    </body>
</html>
