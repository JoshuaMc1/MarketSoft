<?php
    try{
        require("../utilities/utilidades.php");
        $utilidades = new utilidades();
        if(isset($_POST['usuario'], $_POST['clave'], $_POST['dni'], $_POST['primerNombre'], $_POST['segundoNombre'], 
        $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['correo'], $_POST['telefono'], $_POST['direccion'],
        $_FILES['imagenPerfil'], $_POST['sexo'], $_POST['permisos'])){
            $p1 = 0; 
            $p2 = 0; 
            $p3 = 0; 
            $p4 = 0; 
            $p5 = 0;
            $usuario = $_POST['usuario'];
            $passwd = $_POST['clave'];
            $dni = $_POST['dni'];
            $pNombre = $_POST['primerNombre'];
            $sNombre = $_POST['segundoNombre'];
            $pApellido = $_POST['primerApellido'];
            $sApellido = $_POST['segundoApellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $sexo = $_POST['sexo'];
            $direccion = $_POST['direccion'];
            $permisos = $_POST['permisos'];
            $count = count($permisos);
            for ($i=0; $i < $count; $i++) { 
                if($permisos[$i] == '1') $p1 = 1;
                else if($permisos[$i] == '2') $p2 = 1;
                else if($permisos[$i] == '3') $p3 = 1;
                else if($permisos[$i] == '4') $p4 = 1;
                else if($permisos[$i] == '5') $p5 = 1;
            }
            $nFoto = $_FILES['imagenPerfil']['name'];
            $temp = $_FILES['imagenPerfil']['tmp_name'];
            $tam = $_FILES['imagenPerfil']['size'];
            $path = generateRandom($pNombre);
            if($utilidades::validateEmpty($usuario) || $utilidades::validateEmpty($passwd) || $utilidades::validateEmpty($dni) ||
            $utilidades::validateEmpty($pNombre) || $utilidades::validateEmpty($pApellido) || $utilidades::validateEmpty($correo) ||
            $utilidades::validateEmpty($sexo) || $tam > 0){
                if($utilidades::validateAllowed($usuario) || $utilidades::validateEmpty($passwd) || $utilidades::validateEmpty($dni) ||
                $utilidades::validateEmpty($pNombre) || $utilidades::validateEmpty($pApellido)){
                    require("../../../config/db_connection.php");
                    if($utilidades::crud($connection, "CALL pa_crear_usuario('$usuario',SHA2('$passwd',256))")){
                        $result = $utilidades::returnConsult($connection, "SELECT idUsuario FROM usuarios WHERE usuario='$usuario' AND clave=SHA2('$passwd',256)");
                        $id = $result['idUsuario'];
                        if(!file_exists($path)){
                            if($utilidades::crud($connection, "CALL pa_crear_datos_usuario('$id', '$dni', '$pNombre', '$sNombre', '$pApellido', '$sApellido', '$telefono', '$direccion', '$correo', '$sexo', '$path', '$nFoto')")){
                                mkdir("../../../".$path, 0777, true);
                                if(move_uploaded_file($temp, "../../../".$path."/".$nFoto)){
                                    chmod("../../../".$path."/".$nFoto, 0777);
                                    if($utilidades::crud($connection,"CALL pa_crear_permisos_usuario('$id','$p1','$p2','$p3','$p4','$p5')")){
                                        require("../../../config/db_close_connection.php");
                                        header("Location: ../../p?View=Users&message=ok", true, 301);
                                        exit();
                                    }else {
                                        require("../../../config/db_close_connection.php");
                                        header("Location: ../../p?View=Users&message=no", true, 301);
                                        exit();
                                    }
                                }else {
                                    echo "A ocurrido un error";
                                }
                            }else {
                                require("../../../config/db_close_connection.php");
                                header("Location: ../../p?View=Users&message=no", true, 301);
                                exit();
                            }
                        }
                    }else {
                        require("../../../config/db_close_connection.php");
                        header("Location: ../../p?View=Users&message=no", true, 301);
                        exit();
                    }
                }else {
                    header("Location: ../../p?View=Users&status=s_allowed",true, 301);
                    exit();
                }
            }else {
                header("Location: ../../p?View=Users&status=s_empty",true, 301);
                exit();
            }
        }else {
            header("Location: ../../p?View=Users&status=s_undeclared", true, 301);
            exit();
        }
    }catch(Exception $ex){
        echo "Error: ".$ex;
    }

    function generateRandom($pNombre){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 16; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return "resource/uploads/users/".$pNombre."-".$randomString;
    }
?>