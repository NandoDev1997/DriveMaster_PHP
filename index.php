<?php 
require_once ('config/config.php');
require_once ('control/plantilla_control.php');
require_once ('lib/database.php');
$plantilla = new ControladorPlantilla();
//$plantilla->obtenerPlantilla();
$db = new Database();
$query = 'SELECT * FROM usuarios';
$users = $db->getRow($query);
echo '<pre>';
print_r($users);
echo '</pre>';

?>