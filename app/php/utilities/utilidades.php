<?php
class utilidades
{
    public static function consult($sql)
    {
    }

    public static function returnConsult($sql)
    {
    }

    public static function returnPermissions($id_user)
    {
    }

    public static function createDataInSession($id_user, $path)
    {
        require_once($path."config/db_connection.php");
        $sql = mysqli_query($connection, "SELECT * FROM empleados WHERE idUsuario='$id_user'") or die(mysqli_error($connection));
        if (mysqli_num_rows($sql) > 0) {
            $data = mysqli_fetch_assoc($sql);
            $_SESSION['nombre'] = $data['primerNombre'];
            $_SESSION['apellido'] = $data['primerApellido'];
            $_SESSION['photo'] = $data['nombreImg'];
        } else echo "No Existe";
        require_once($path."config/db_close_connection.php");
    }

    //Es pra validar si los datos enviados estan vacios
    public static function validate_empty($variable)
    {
        if (strlen($variable) < 3) return false;
        else return true;
    }

    //Es para verificar que la contraseña no lleva caracteres especiales por ejemplo <>
    public static function validate_allowed($variable)
    {
        if (mb_ereg("^[a-zA-Z0-9\-_]$", $variable)) return false;
        else return true;
    }

    public static function returnStatus($status){
        switch($status){
            //s_no significa que los datos o credenciales no coinciden o son incorrectos
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
        }
    }
}
