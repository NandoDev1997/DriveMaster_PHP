<?php
if (!isset($_SESSION)) {
    session_start();
}
class ControladorPlantilla
{
    /* ------------------------- LLamada a la plantilla ------------------------- */
    
    function router()
    {
        if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != ''){
            include RUTA_APP.'/view/plantilla.php';
        }else{
            include RUTA_APP . '/control/login_control.php';
        }
        return true;
    }

    function cargarVista()
    {
        if (isset($_GET['pagina'])) {
            if (file_exists(RUTA_APP . '/view/templates/'.$_GET['pagina'].'.php')) {
                include RUTA_APP . '/view/templates/' . $_GET['pagina'] . '.php';
                unset($_GET['pagina']);
            }else{
                include RUTA_APP . '/view/templates/404.php';
            }
        }else{
            include RUTA_APP . '/view/templates/inicio.php';
        }
        return true;
    }

}