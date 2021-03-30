<?php 
require_once (RUTA_APP. '/model/main_model.php');

class ControladorModelo
{

    function obtenerDatosLogin($params)
    {
        $model = new Main_model();
        $model->filter($params);
        $login = $model->obtenerUsuarioLogin($params);
        if($login != null){
            return $login;
        }else{
            return false;
        } 
    }



}

?>