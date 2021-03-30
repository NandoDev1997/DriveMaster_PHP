<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once ('config/config.php');
require_once (RUTA_APP. '/control/plantilla_control.php');
session_destroy();
unset($_SESSION['usuario']);
header('Location: http://192.168.0.233/~lfmorales/DriveMaster_PHP/');//
?>