<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Custom Style-->
    <link rel="stylesheet" href="<?=constant('URL')?>/public/css/Style_Login.css">
</head>
<body>
    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4><i class="fas fa-laptop-house fa-lg"></i> Milla.</h4>

                    <!-- Owl-Carousel -->
                    <div class="owl-carousel owl-theme">
                        <img src="../public/assets/Add.svg" alt="" class="login_img">
                        <img src="../public/assets/Export_files.svg" alt="" class="login_img">
                        <img src="../public/assets/ChartData2.svg" alt="" class="login_img">
                    </div>
                    <!-- /Owl-Carousel -->
                </div>
                <div class="col login">
                    <form action="" method="POST" class="user">
                        <div class="titles">
                            <h3>Inicio de Sesión</h3>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Usuario" class="form-input" name="txtUsuario">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Contraseña" class="form-input" name="txtClave">
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-login">Entrar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
</body>

</html>