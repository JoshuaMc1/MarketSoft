<?php
    try{
        include("../utilities/utilidades.php");
        $instancia = new utilidades();
        if(isset($_POST['idUser'])){
            
        }echo $instancia::message("No existe la variable","2");
    }catch(Exception $ex){
        echo $instancia::message("Error: ".$ex,"2");;
    }
?>