<?php 
require_once ('config/config.php');
require_once ('control/plantilla_control.php');
require_once ('lib/database.php');
session_start();
$_SESSION['usuario'] = 'Nando';
$plantilla = new ControladorPlantilla();
// $db = new Database();
// $query = 'SELECT * FROM usuarios';
// $users = $db->getRow($query);
// echo '<pre>';
// print_r($users);
// echo '</pre>';
$plantilla->router();
?>