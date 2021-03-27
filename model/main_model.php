<?php 
require_once RUTA_APP.'/lib/database.php';

class Main_model
{
    
    function obtenerUsuarioLogin($params)
    {
        $database = new Database();
        $sqlstring = "
        SELECT * 
        FROM 
        usuarios
        WHERE 
        email = '$params[email]'
        AND password = '$params[password]'
        ";
        $result = $database->getRow($sqlstring);
        return $result;
    }
    
}
