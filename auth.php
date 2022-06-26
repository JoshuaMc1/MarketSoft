<?php
if (isset($_POST['Username'], $_POST['Password'])) {
    include("app/php/utilities/utilidades.php");
    $utilities = new utilidades();
    
    $user = $_POST['Username'];
    $pass = $_POST['Password'];
    if($utilities::validateEmpty($user) || $utilities::validateEmpty($pass)){
        if($utilities::validateAllowed($user) === "ok"){
            if($utilities::validateAllowed($pass) === "ok"){
                require_once("config/db_connection.php");
                mysqli_real_escape_string( $connection, $user);
                mysqli_real_escape_string($connection, $pass);
                $sql ="SELECT * FROM usuarios WHERE usuario='$user' AND clave=SHA2('$pass',256) AND status='1'";
                if($utilities::consult($connection, $sql)){
                    include("config/start_sessions.php");
                    $data = $utilities::returnConsult($connection, $sql);
                    $_SESSION['user'] = $data['idUsuario'];
                    require_once("config/db_close_connection.php");
                    header("Location: app/p?View=Dashboard&status=s_success", true, 301);
                    exit();
                }else {
                    header("Location: ./?status=s_no", true, 301);
                    exit();
                }
            }else{
                header("Location: ./?status=s_allowed", true, 301);
                exit();
            }
        }else {
            header("Location: ./?status=s_allowed", true, 301);
            exit();
        }
    }else {
        header("Location: ./?status=s_empty", true, 301);
        exit();
    }
}else {
    header("Location: ./?status=s_error_auth", true, 301);
    exit();
}?>