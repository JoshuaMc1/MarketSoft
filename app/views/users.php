<?php
include("layouts/navbar.php");
include("includes/header.html");
$navbar = new navbar;
?>

<body class="body-pd" id="body-pd">
    <header>
        <?php $navbar->buildNavbar(); ?>
    </header>
    <section class="container-fluid mb-4" id="contenido">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mt-2 mb-4">
                    <div class="card-body">
                        <h2 class="fw-bold">Usuarios</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card shadow my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow border-radius-lg pt-4 pb-3">
                            <h5 class="text-white text-capitalize ps-3">Lorem, ipsum.</h5>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsa voluptates dolor harum nobis sunt. Eius, unde nam similique culpa quasi deleniti dignissimos iure ex magnam laudantium, quo, sed vero earum explicabo nihil officia corporis commodi cupiditate. Vel excepturi unde doloremque qui, ut facilis. Velit, maiores. Aperiam optio ullam omnis!
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("includes/footer.html"); ?>
</body>

</html>