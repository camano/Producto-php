<?php
require_once "./Config/SERVER.php";
require_once "./Model/DAO/usuarioDAO.php";
require_once "./Model/Main/mainModel.php";
require_once "./Model/VO/usuarioVO.php";
$usuario=new usuarioDAO();
$rows=$usuario->listarusuario();
foreach($rows as $usuario){
echo "<h1>".$usuario->getUsuarioNombre()."</h1>";
}
