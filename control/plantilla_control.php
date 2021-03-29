<?php
class ControladorPlantilla
{
    /* ------------------------- LLamada a la plantilla ------------------------- */
    public function ctrlObtenerPlantilla()
    {
        include RUTA_APP.'/view/plantilla.php';
    }
}