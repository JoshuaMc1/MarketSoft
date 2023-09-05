<!DOCTYPE html>
<html lang="es-HN">

<head>
    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="resource/img/Logo-MarketSoft-2.1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="resource/style/login/style-min.css">
    <title>MarketSoft - Login</title>
</head>

<body>
    <?php
        if(isset($_GET['status'])){
            require_once("app/php/utilities/utilidades.php");
            $utilidades = new utilidades();
            $utilidades::returnStatus($_GET['status']);
        }?>
    <section class="vh-100 glass">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <!-- <img src="resource/img/photo.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" /> -->
                                <img src="resource/img/frozen-food-animate.svg" alt="Imagen del login" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="auth" id="form">
                                        <div class="d-flex align-items-center mb-5 pb-1">
                                            <img src="resource/img/Logo-MarketSoft-2.1.png" class="logo" alt="Logo de la empresa">
                                            <span class="h1 fw-bold mb-0">MarketSoft</span>
                                        </div>
                                        <h4 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 2px;">Inicio de sesión</h4>
                                        <div class="form-floating mb-4">
                                            <input type="text" id="txtUser" name="Username" class="form-control form-control-lg" autocomplete="off"/>
                                            <label for="txtUser" class="fw-bold">Usuario</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="password" id="txtPassword" name="Password" class="form-control form-control-lg" autocomplete="off"/>
                                            <label for="txtPassword" class="fw-bold">Contraseña</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <div class="d-grid">
                                                <button class="btn bg-green btn-lg btn-block" type="submit"><i class="fas fa-sign-in fa-fade"></i> Iniciar Sesión</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="resource/js/login/validation-min.js"></script>
</body>
</html>
