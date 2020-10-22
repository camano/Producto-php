<?php


class usuarioControlador extends usuarioDAO
{

    public function inicio()
    {
        return "inicio con";
    }
    public function metodo_listar_usuario()
    {
        $cont = 1;
        $url = SERVERURL . "View/modules/Administrador/editarUsuario.php";
        $usuario = new usuarioDAO();
        $rows = usuarioDAO::listarusuario();
        foreach ($rows as $usuario) {
            echo "<tr>";
            echo "<th scope=\"row\">" . $cont . "</th>";
            echo "<input type='hidden' id='id' value='" . $usuario->getUsuarioId() . "' >";
            echo "<td>" . $usuario->getUsuarioNombre() . "</td>";
            echo "<td>" . $usuario->getUsuarioTelefono() . "</td>";
            echo "<td>" . $usuario->getUsuarioCorreo() . "</td>";
            echo "<td>" . $usuario->getUsuarioEstado() . "</td>";
            echo "<td>" . $usuario->getRolVO()->getrolNombre() . "</td>";
            echo "<td><button type=\"button\" onclick='desplejarmodal(" . $url . ");' class=\"btn btn-warning\">Editar</button></td>";
            echo "<td><button type=\"button\" onclick='eliminarusuario(" . $usuario->getUsuarioId() . ");' class=\"btn btn-danger form-group\">Eliminar</button></td>";
            echo "</tr>";
            $cont++;
        }
    }

    public function eliminar_usuario_controlador()
    {
        $idusuario = $_POST['idusuario'];
        $idusuario = mainModel::limpiar_cadena($idusuario);
        if ($idusuario == 1) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un error",
                "Texto" => "No podemos eliminar el usuario principal del sistema",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        $eliminar_usuario = usuarioDAO::eliminar_Usuario_modelo($idusuario);
        if ($eliminar_usuario->rowCount() == 1) {
            $alerta = [
                "Alerta" => "recargar",
                "Titulo" => "Usuario Eliminado",
                "Texto" => "EL usuario ha sido eliminado Correctamente",
                "Tipo" => "succes"
            ];
        } else {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un error",
                "Texto" => "No podemos eliminar el usuario",
                "Tipo" => "error"
            ];
        }
        echo json_encode($alerta);
        exit();
    }
}
