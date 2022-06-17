<?php
    include("layouts/navbar.php");
    $navbar = new navbar;
?>
<!DOCTYPE html>
<html lang="es-HN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resource/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../resource/libs/alertifyjs/alertify.js">
    <link rel="stylesheet" href="../resource/libs/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="../resource/libs/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="../resource/style/style.css?v=3">
    <title>MarketSoft - <?php echo $vista ?></title>
</head>

<body class="body-pd" id="body-pd">
    <header>
        <?php $navbar->buildNavbar($_SESSION['user']);?>
    </header>
    <section class="container-fluid mb-4" id="contenido">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow border-radius-lg pt-4 pb-3">
                            <h5 class="text-white text-capitalize ps-3">Titulo</h5>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                        <h5 class="fw-bold"><?php echo "Tiempo inactivo en segundos: ".$sessionTTL?></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="sticky-footer bg-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; MarketSoft 2022</span>
            </div>
        </div>
    </footer>
    <script src="../resource/libs/@popperjs/core@"></script>
    <script src="../resource/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../resource/libs/jquery/jquery.js"></script>
    <script src="../resource/js/app.js"></script>
</body>

</html>