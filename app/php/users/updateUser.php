<?php
    if(isset($_POST['idUser'], $_POST['usuario'], $_POST['dni'], $_POST['primerNombre'], $_POST['segundoNombre'],
    $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['correo'], $_POST['telefono'], $_POST['slcSexo'],
    $_POST['direccion'])){
        include("../utilities/utilidades.php");
        $utilidades = new utilidades();
    }else {
        header("Location: ../../../p?View=Admin_user&status=s_", true, 301);
        exit();
    }
?>