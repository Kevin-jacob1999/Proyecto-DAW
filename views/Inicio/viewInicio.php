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
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-dark">Ingreso de Datos</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                        
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=constant('URL')?>public/js/scripts.js"></script>
    </body>
</html>
