<?php
class vistasModel
{
    protected static function obtener_vistas_modelo($vistas, $modulo)
    {
        $listaBlanca = ["home", "listarUsuario","editarUsuario"];
        if (in_array($vistas, $listaBlanca)) {
            if ($vistas == "home") {
                if (is_file(("./View/modules/") . $vistas . "-view.php")) {
                    $contenido = "./View/modules/" . $vistas . "-view.php";
                } else {
                    $contenido = "404";
                }
            } else {
                if (is_file(("./View/modules/" . $modulo . "/") . $vistas . "-view.php")) {
                    $contenido = "./View/modules/" . $modulo . "/" . $vistas . "-view.php";
                } else {
                    $contenido = "404";
                }
            }
        } elseif ($vistas == "login" || $vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
