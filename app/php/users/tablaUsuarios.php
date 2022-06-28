<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    try{
        include("../utilities/utilidades.php");
        require("../../../config/db_connection.php");
        $instancia = new utilidades();
        echo $instancia::returnConsultJSON($connection, "SELECT * FROM vista_empleados");
        require("../../../config/db_close_connection.php");
    }catch(Exception $e){
        echo $e;
    }
?>