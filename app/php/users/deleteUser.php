<?php
    try{
        include("../utilities/utilidades.php");
        $instancia = new utilidades();
        if(isset($_POST['idUser'])){
            $id = $_POST['idUser'];
            if(strlen($id) >= 1){
                if($instancia::validateAllowed($id) === "ok"){
                    require("../../../config/db_connection.php");
                    if($instancia::crud($connection, "CALL pa_eliminar_usuario('".mysqli_real_escape_string($connection, $id)."')")){
                        require("../../../config/db_close_connection.php");
                        header("Location: ../../p?View=Admin_user&message=ok", true, 301);
                        exit();
                    }else{
                        require("../../../config/db_close_connection.php");
                        header("Location: ../../p?View=Admin_user&message=no", true, 301);
                        exit();
                    }
                }else{
                    header("Location: ../../p?View=Admin_user&status=s_allowed", true, 301);
                    exit();
                }
            }else {
                header("Location: ../../p?View=Admin_user&status=s_empty", true, 301);
                exit();
            }
        }else {
            header("Location: ../../p?View=Admin_user&status=s_undeclared", true, 301);
            exit();
        }
    }catch(Exception $ex){
        echo $instancia::message("Error: ".$ex,"2");;
    }
?>