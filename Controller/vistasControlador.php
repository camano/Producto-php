<?php
require_once "./Model/Main/vistasModel.php";
class vistasControlador extends vistasModel{

    public function obtener_plantilla_controlador(){
        return require_once "./View/plantilla.php";
    }

    public function obtener_vistas_controlador($modulo){
        if (isset($_GET['url'])) {
            $ruta=explode("/",$_GET['url']);
            $respuesta=vistasModel::obtener_vistas_modelo($ruta[0],$modulo);
        }else{
            $respuesta="login";
        }
        return $respuesta;
    }
}