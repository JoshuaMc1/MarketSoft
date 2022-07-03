<?php
try {
    if (isset(
        $_POST['idUser'],
        $_POST['usuario'],
        $_POST['dni'],
        $_POST['primerNombre'],
        $_POST['segundoNombre'],
        $_POST['primerApellido'],
        $_POST['segundoApellido'],
        $_POST['correo'],
        $_POST['telefono'],
        $_POST['slcSexo'],
        $_POST['direccion']
    )) {
        include("../utilities/utilidades.php");
        $utilidades = new utilidades();
        $id = $_POST['idUser'];
        $usuario = $_POST['usuario'];
        $dni = $_POST['dni'];
        $pNombre = $_POST['primerNombre'];
        $sNombre = $_POST['segundoNombre'];
        $pApellido = $_POST['primerApellido'];
        $sApellido = $_POST['segundoApellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $sexo = $_POST['slcSexo'];
        $direccion = $_POST['direccion'];
        if($utilidades::validateEmpty($usuario) || $utilidades::validateEmpty($dni) ||
        $utilidades::validateEmpty($pNombre) || $utilidades::validateEmpty($sNombre) ||
        $utilidades::validateEmpty($pApellido) || $utilidades::validateEmpty($sApellido) ||
        $utilidades::validateEmpty($correo) || $utilidades::validateEmpty($telefono) ||
        $utilidades::validateEmpty($direccion) || strlen($id) > 0){
            if($utilidades::validateAllowed($usuario) || $utilidades::validateEmpty($dni) ||
            $utilidades::validateEmpty($pNombre) || $utilidades::validateEmpty($sNombre) ||
            $utilidades::validateEmpty($pApellido) || $utilidades::validateEmpty($sApellido) ||
            $utilidades::validateEmpty($telefono) || $utilidades::validateAllowed($id)){
                require("../../../config/db_connection.php");
                if($utilidades::crud($connection, "CALL pa_actualizar_datos_usuario('$id','$usuario','$dni','$pNombre','$sNombre','$pApellido','$sApellido','$telefono','$direccion','$correo','$sexo')")){
                    require("../../../config/db_close_connection.php");
                    header("Location: ../../p?View=Admin_user&message=ok", true, 301);
                    exit();
                }else {
                    require("../../../config/db_close_connection.php");
                    header("Location: ../../p?View=Admin_user&message=no", true, 301);
                    exit();
                }
            }else {
                header("Location: ../../p?View=Admin_User&status=s_allowed",true, 301);
                exit();
            }
        }else {
            header("Location: ../../p?View=Admin_User&status=s_empty",true, 301);
            exit();
        }
    } else {
        header("Location: ../../p?View=Admin_User&status=s_undeclared", true, 301);
        exit();
    }
} catch (Exception $ex) {
    echo "Error: " . $ex;
}
