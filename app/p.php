<?php
error_reporting(0);
session_start();
if(isset($_SESSION['dateSession']) || $_SESSION['dateSession'] != ""){
    if (isset($_GET['View'])) {
        require_once("../config/start_sessions.php");
        require_once("php/utilities/utilidades.php");
        $__DIR__ = "../";
        $utilidades = new utilidades();
        $utilidades::createDataInSession($_SESSION['user'], $__DIR__);
        $vista = $_GET['View'];
        if (strlen($vista) > 1) {
            if(is_file("views/".$vista.".php")){
                require "views/".$vista.".php";
                if(isset($_GET['status']))$utilidades::returnStatus($_GET['status']);
            }else header("Location: ../error/404.html", true, 301);
        } else header("Location: ../error/404.html", true, 301);
    } else header("Location: ../error/404.html", true, 301);
}else header("Location: ../?status=s_denied", true, 301);
?>