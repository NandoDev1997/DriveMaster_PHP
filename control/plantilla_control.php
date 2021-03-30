<?php
class ControladorPlantilla
{
    /* ------------------------- LLamada a la plantilla ------------------------- */
    
    function router()
    {
        if (isset($_SESSION) && $_SESSION['usuario'] != null){
            include RUTA_APP.'/view/plantilla.php';
        }else{
            include RUTA_APP . '/view/templates/login.php';
        }
        return true;
    }

    function cargarVista()
    {
        if (isset($_GET['pagina'])) {
            if (file_exists(RUTA_APP . '/view/templates/'.$_GET['pagina'].'.php')) {
                include RUTA_APP . '/view/templates/' . $_GET['pagina'] . '.php';
            }else{
                include RUTA_APP . '/view/templates/404.php';
            }
        }else{
            include RUTA_APP . '/view/templates/inicio.php';
        }
        return true;
    }

}