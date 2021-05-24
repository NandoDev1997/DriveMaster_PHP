<?php 
require_once RUTA_APP.'/database/database.php';

class Main_model extends Database
{
    
    function obtenerUsuarioLogin($params)
    {
        $database = new Database();
        $query = "
        SELECT * 
        FROM 
        usuarios
        WHERE 
        email = '$params[email]'
        AND password = '$params[password]'
        ";
        $result = $database->getRow($query);
        return $result;
    }
    
}
