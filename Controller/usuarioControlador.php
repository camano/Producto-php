<?php

class usuarioControlador
{

    public function inicio()
    {
        echo "inicio con";
    }
    public function listarusuario()
    {
        $usuario = new usuarioDAO();
        $rows = $usuario->listarusuario();
        foreach ($rows as $usuario) {
            echo "<td>1</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
        }
    }
}

$metodo = $_POST['metodo'];
$usuario=new usuarioControlador();
switch($metodo){
    case "listar":
        echo $usuario->listarusuario();
    break;
}
