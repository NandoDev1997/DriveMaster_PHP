<?php

require_once(RUTA_APP . '/control/model_control.php');
require_once(RUTA_APP . '/control/plantilla_control.php');

class ControladorLogin
{
    static public function obtenerLogin()
    {   
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
            $params = array(
                'email'     => trim($_POST['email']),
                'password'  => md5(trim($_POST['password'])),
            );
            $login = ControladorModelo::obtenerDatosLogin($params);
        }
        return $login;
    }
    
    static function verificarLogin($login)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['usuario'] = $login;
        echo '
        <script>
            window.location = "/~lfmorales/DriveMaster_PHP/"
        </script>
        ';
        return true;
    }


}
?>