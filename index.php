<?php 
require_once ('config/config.php');
require_once ('control/plantilla_control.php');
$plantilla = new ControladorPlantilla();
$plantilla->obtenerPlantilla();
?>