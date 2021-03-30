<?php 

require_once (RUTA_APP. '/control/model_control.php');
require_once (RUTA_APP. '/control/plantilla_control.php');




    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $params = array(
            'email'     => trim($_POST['email']),
            'password'  => md5 (trim($_POST['password'])),
        );
        $model = new ControladorModelo();
        $login = $model->obtenerDatosLogin($params);
    }




$error_login ='';
if (isset($login) && $login == false){
    $error_login = '<div class="alert alert-danger ">
    Verifique su email y contraseña.
    </div>';
}elseif(isset($login) && $login != false){
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['usuario'] = $login;
    echo '
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        window.location = "index.php?pagina=inicio"
    </script>
    ';
}
include (RUTA_APP. '/view/login.php');


?>