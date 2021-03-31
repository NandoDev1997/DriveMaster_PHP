<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once ('config/config.php');
require_once ('control/plantilla_control.php');
require_once ('control/login_control.php');
$plantilla = new ControladorPlantilla();
$plantilla->router();
?>