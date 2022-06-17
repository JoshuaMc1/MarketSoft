<?php
session_start();
$_SESSION['dateSession'] = date("d-m-Y H:i:s");
// Establecer tiempo de vida de la sesión en segundos
$inactividad = 900;
// Comprobar si $_SESSION["timeout"] está establecida
if(isset($_SESSION["timeout"])){
    // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
    $sessionTTL = time() - $_SESSION["timeout"];
    if($sessionTTL > $inactividad){
        session_destroy();
        header("Location: ../?status=s_timeout", true, 301);
    }
}
// El siguiente key se crea cuando se inicia sesión
$_SESSION["timeout"] = time();