<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Milla | Actualizar Rol</title>
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>public/css/Style_System.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>public/lib/validetta/validetta.css">
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>public/lib/sweetAlert/sweetalert2.css">
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
                        <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-5">
                            <h1 class="h3 mb-0 text-gray-800">Actualización Rol</h1>
                        </div> 
                        
                        <div class="row justify-content-center">
                            <!-- Area Chart -->
                            <div class="col-xl-6 col-lg-9">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold">Detalles de Datos</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <?php
                                                $rol = $this->RolID;
                                            ?>
                                            <form action="<?=constant('URL')?>roles/actualizarRol" method="POST" id="frmUpdateRol">
                                                <div class="row mt-4">
                                                    <div class="form-group col-sm-2">
                                                        <label><b>#</b></label>
                                                        <input type="text" class="form-control text-center" name="txtID" value="<?=$rol[0]['ID_Rol']?>" ReadOnly><br>
                                                    </div>

                                                    <div class="form-group col-sm-10">
                                                        <label><b>Nombre del Rol</b></label>
                                                        <input type="text" class="form-control" name="txtRol" value="<?=$rol[0]['Nombre']?>" data-validetta="required"><br>
                                                    </div>
                                                </div>

                                                <div class="row mt-2 mb-4 justify-content-center">
                                                    <button class="btn btn-primary" id="btnModificarRol">Modificar</button>
                                                </div>
                                            </form>
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

        <script>
        var url = '<?=constant('URL')?>';
        </script>

        <script src="<?=constant('URL')?>public/lib/jQuery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=constant('URL')?>public/js/scripts.js"></script>
        <script src="<?=constant('URL')?>public/js/roles.js"></script>
        <script src="<?=constant('URL')?>public/lib/validetta/validetta.js"></script>
        <script src="<?=constant('URL')?>public/lib/validetta/validettaLang-es-ES.js"></script>
        <script src="<?=constant('URL')?>public/lib/sweetAlert/sweetalert2.js"></script>
    </body>
</html>
