<?php
$peticionAjax = true;
require_once "../Config/APP.php";
require_once "../Config/SERVER.php";
require_once "../Model/Main/mainModel.php";
require_once "../Model/VO/usuarioVO.php";
require_once "../Model/DAO/usuarioDAO.php";
require_once "../Controller/usuarioControlador.php";
$usuario=new usuarioControlador();
$url = $_POST['url'];
$metodo = $_POST['metodo'];
switch ($metodo) {
    case "listar":
        echo $usuario->metodo_listar_usuario();
        break;
}
