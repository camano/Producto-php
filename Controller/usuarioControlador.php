<?php


class usuarioControlador
{

    public function inicio()
    {
        return "inicio con";
    }
    public function metodo_listar_usuario()
    {
        $cont =1;
        $url=SERVERURL."View/modules/Administrador/editarUsuario.php";
        $usuario = new usuarioDAO();
        $rows = $usuario->listarusuario();
        foreach ($rows as $usuario) {
            echo "<tr>";
            echo "<th scope=\"row\">" . $cont . "</th>";
            echo "<input type='hidden' id='id' value='".$usuario->getUsuarioId()."' >";
            echo "<td>" . $usuario->getUsuarioNombre() . "</td>";
            echo "<td>" .$usuario->getUsuarioTelefono() . "</td>";
            echo "<td>" .$usuario->getUsuarioCorreo() . "</td>";
            echo "<td>".$usuario->getRolVO()->getrolNombre()."</td>";
            echo "<td><button type=\"button\" onclick='desplejarmodal(".$url.");' class=\"btn btn-warning\">Editar</button></td>";
            echo "<td><button type=\"button\" onclick='eliminarusuario(" .$usuario->getUsuarioId() .");' class=\"btn btn-danger form-group\">Eliminar</button></td>";
            echo "</tr>";
           $cont++;
        }
    }
}
