<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="resource/img/Logo-MarketSoft-2.1.png">
    <link rel="stylesheet" href="resource/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/style/login/style.css?v=<?php echo rand()?>">
    <title>MarketSoft - Login</title>
</head>

<body>
    <section class="vh-100 glass">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="resource/img/photo.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form>
                                        <div class="d-flex align-items-center mb-5 pb-1">
                                            <img src="resource/img/Logo-MarketSoft-2.1.png" class="logo" alt="Logo de la empresa">
                                            <span class="h1 fw-bold mb-0">MarketSoft</span>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicio de sesión</h5>
                                        <div class="form-floating mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-lg" />
                                            <label for="form2Example17">Usuario</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                            <label for="form2Example27">Contraseña</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <div class="d-grid">
                                                <button class="btn bg-green btn-lg btn-block" type="button">Iniciar Sesión</button>
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
    <script src="resource/libs/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>