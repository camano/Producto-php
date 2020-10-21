<?php
require_once "./Config/APP.php";
require_once "./Config/SERVER.php";
require_once "./Model/DAO/usuarioDAO.php";
require_once "./Model/Main/mainModel.php";
require_once "./Model/VO/usuarioVO.php";
require_once "./Controller/vistasControlador.php";
 require_once "./Controller/usuarioControlador.php";

$plantilla=new vistasControlador();
$plantilla->obtener_plantilla_controlador();

