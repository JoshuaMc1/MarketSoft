<?php
class utilidades
{
    //Realizar una consulta a la base de datos y retorna si encontro el resultado
    public static function consult($connection, $sql)
    {
        $result = mysqli_query($connection, $sql);
        return mysqli_num_rows($result) > 0 ? true : false;
    }

    //Realizar operaciones como UPDATE, DELETE y INSERT
    public static function crud($connection, $sql){
        return mysqli_query($connection, $sql);
    }

    //Retorna el primer valor ve la consulta
    public static function returnConsult($connection, $sql)
    {
        $result = mysqli_query($connection, $sql);
        return mysqli_fetch_array($result);
    }

    //Retorna los datos en formato JSON
    public static function returnConsultJSON($connection, $sql)
    {
        $result = mysqli_query($connection, $sql);
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    //Crea las valiables de sesion
    public static function createDataInSession($id_user, $path) 
    {
        require_once($path."config/db_connection.php");
        $sql = mysqli_query($connection, "SELECT * FROM empleados WHERE idUsuario='$id_user'") or die(mysqli_error($connection));
        $permisos = utilidades::returnConsult($connection, "SELECT * FROM permisos WHERE idUsuario='$id_user'");
        if (mysqli_num_rows($sql) > 0) {
            $data = mysqli_fetch_assoc($sql);
            $_SESSION['nombre'] = $data['primerNombre'];
            $_SESSION['apellido'] = $data['primerApellido'];
            $_SESSION['pathPhoto'] = $data['rutaImg'];
            $_SESSION['photo'] = $data['nombreImg'];
            $_SESSION['p2'] = $permisos['p_inventario'];
            $_SESSION['p1'] = $permisos['p_facturacion'];
            $_SESSION['p3'] = $permisos['p_compras'];
            $_SESSION['p4'] = $permisos['p_usuarios'];
            $_SESSION['p5'] = $permisos['p_reportes'];
        }
        require_once($path."config/db_close_connection.php");
    }

    //Es para validar si los datos enviados estan vacios
    public static function validateEmpty($variable)
    {
        return strlen($variable) >= 3 ? true : false;
    }

    //Es para verificar que la contraseña no lleva caracteres especiales por ejemplo <@#$%^&*()>
    public static function validateAllowed($variable)
    {
        if(preg_match_all("/[a-zA-Z0-9_-]/",$variable) === strlen($variable))return "ok";
        else return "no";
    }
    
    //Aqui se definen los status de error
    public static function returnStatus($status)
    {
        switch($status){
            case 's_no':
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.error("Datos incorrectos");
                    </script>
                ';
                break;
            case "s_denied":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.error("No tiene una sesión activa o la actual ya caduco");
                    </script>
                ';
                break;
            case "s_empty":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.error("Debe llenar todos los campos");
                    </script>
                ';
                break;
            case "s_allowed":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.error("No se aceptan caracteres especiales");
                    </script>
                ';
                break;
            case "s_timeout":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.error("Se a cerrado la sesión por inactividad");
                    </script>
                ';
                break;
            case "s_success":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.success("A iniciado sesión exitosamente");
                    </script>
                ';
                break;
            case "s_undeclared":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.error("Error al verificar variables o dichas variables no existen");
                    </script>
                ';
                break;
        }
    }

    //Se utiliza para mostrar mensajes en pantalla o alertas
    public static function message($msg, $type)
    {
        switch($type){
            case "1":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.success("'.$msg.'");
                    </script>
                ';
                break;
            case "2":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.error("'.$msg.'");
                    </script>
                ';
                break;
            case "3":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.message("'.$msg.'");
                    </script>
                ';
                break;
            case "4":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.notify("'.$msg.'");
                    </script>
                ';
                break;
            case "5":
                echo '
                    <script>
                        alertify.set("notifier","position", "top-center");
                        alertify.warning("'.$msg.'");
                    </script>
                ';
                break;
        }
    }
}
?>