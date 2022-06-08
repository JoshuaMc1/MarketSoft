<?php
if(isset($_GET['View'])){
    $vista = $_GET['View'];
    if(strlen($vista) > 1){
        include "views/dashboard.php";
    }else header("Location: ../error/404.html");
}