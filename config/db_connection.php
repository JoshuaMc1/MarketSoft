<?php
    try {
        $params = include_once("db_params.php");
        $connection = mysqli_connect($params["db_host"], $params["db_user"], $params["db_password"], $params["db_name"]);
        if (!$connection) {
            die("Conexion fallida: " . mysqli_connect_error());
        }
    } catch (Exception $e) {
        echo "¡Error!: al conectarse a la base de datos<br/>";
        die();
    }
?>