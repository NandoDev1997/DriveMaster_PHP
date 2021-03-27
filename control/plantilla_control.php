<?php
class ControladorPlantilla
{
    /* ------------------------- LLamada a la plantilla ------------------------- */
    public function __construct()
    {
        if (!isset($_SESSION) && empty($_SESSION)) {
            #Si hay sesion llamamos la plantilla principal
            include RUTA_APP."/view/plantilla.php";
        }else{
            #Si no hay sesion llamamos la plantilla logins
            
        }
    }
}