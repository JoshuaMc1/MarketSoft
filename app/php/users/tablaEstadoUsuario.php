<?php
    try {
        require("../utilities/utilidades.php");
        $utilidades = new utilidades();
        require("../../../config/db_connection.php");
        $instancia = new utilidades();
        echo $instancia::returnConsultJSON($connection, "SELECT * FROM vista_usuarios_status");
        require("../../../config/db_close_connection.php");
    }catch(Exception $ex) {
        echo "Error: ".$ex;
    }
?>