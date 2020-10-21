<?php
require_once "./Config/APP.php";
require_once "./Config/SERVER.php";
require_once "./Controller/vistasControlador.php";
$plantilla=new vistasControlador();
$plantilla->obtener_plantilla_controlador();

