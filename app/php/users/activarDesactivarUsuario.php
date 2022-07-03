<?php
    try {
        require("../utilities/utilidades.php");
        $utilidades = new utilidades();
        if(isset($_GET['value'], $_GET['u'])) {
            require("../../../config/db_connection.php");
            $estado = $_GET['value'];
            $id = $_GET['u'];
            if($estado == '0') {
                if($utilidades::crud($connection, "CALL pa_eliminar_usuario('$id')")){
                    require("../../../config/db_close_connection.php");
                    header("Location: ../../p?View=Admin_User&message=ok", true, 301);
                    exit();
                }else {
                    require("../../../config/db_close_connection.php");
                    header("Location: ../../p?View=Admin_User&message=no", true, 301);
                    exit();
                }
            }else if($estado == '1'){
                if($utilidades::crud($connection, "CALL pa_activar_usuario('$id')")){
                    require("../../../config/db_close_connection.php");
                    header("Location: ../../p?View=Admin_User&message=ok", true, 301);
                    exit();
                }else {
                    require("../../../config/db_close_connection.php");
                    header("Location: ../../p?View=Admin_User&message=no", true, 301);
                    exit();
                }
            }
        } else {
            header("Location: ../../p?View=Admin_User&status=s_undeclared", true, 301);
            exit();
        }
    }catch(Exception $ex) {
        echo "Error: ".$ex;
    }
?>