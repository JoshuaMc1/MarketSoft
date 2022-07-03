<?php
    try{
        require("../utilities/utilidades.php");
        $utilidades = new utilidades();
        if(isset($_POST['permisos'], $_POST['idUser'])) {
            $id = $_POST['idUser'];
            $permisos = $_POST['permisos'];
            $p1 = 0; 
            $p2 = 0; 
            $p3 = 0; 
            $p4 = 0; 
            $p5 = 0;
            if(strlen($id) > 0) {
                if($utilidades::validateAllowed($id)) {
                    require("../../../config/db_connection.php");
                    $count = count($permisos);
                    for ($i=0; $i < $count; $i++) { 
                        if($permisos[$i] == '1') $p1 = 1;
                        else if($permisos[$i] == '2') $p2 = 1;
                        else if($permisos[$i] == '3') $p3 = 1;
                        else if($permisos[$i] == '4') $p4 = 1;
                        else if($permisos[$i] == '5') $p5 = 1;
                    }
                    if($utilidades::crud($connection, "CALL pa_actualizar_permisos('$id','$p1','$p2','$p3','$p4','$p5')")){
                        require("../../../config/db_close_connection.php");
                        header("Location: ../../p?View=Admin_User&message=ok", true, 301);
                        exit();
                    }else {
                        require("../../../config/db_close_connection.php");
                        header("Location: ../../p?View=Admin_User&message=no", true, 301);
                        exit();
                    }
                }else {
                    header("Location: ../../p?View=Admin_User&status=s_allowed", true, 301);
                    exit();
                }
            }else {
                header("Location: ../../p?View=Admin_User&status=s_empty", true, 301);
                exit();
            }
        }else {
            header("Location: ../../p?View=Admin_User&status=s_undeclared", true, 301);
            exit();
        }
    }catch(Exception $ex) {
        echo "Error: ".$ex;
    }
?>