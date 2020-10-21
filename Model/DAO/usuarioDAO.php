<?php

class usuarioDAO 
{
    public function inicio()
    {
        return "inicio";
    }

    public function listarusuario()
    {
        $con=new mainModel();
        $array = [];
        $cont = 0;
        $sql = "select * from usuario inner join rol on usuarioRol=rolId;";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->execute();
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new usuarioVO();
            $rol=new rolVO();
            $usuario->setUsuarioId($resultado['usuarioId']);
            $usuario->setUsuarioNombre($resultado['usuarioNombre']);
            $usuario->setUsuarioTelefono($resultado['usuarioTelefono']);
            $usuario->setUsuarioCorreo($resultado['usuarioCorreo']);
            $rol->setRolId($resultado['rolId']);
            $rol->setRolNombre($resultado['rolNombre']);
            $usuario->setRolVO($rol);
            $array[$cont]=$usuario;
            $cont++;
        }
        return $array;
    }
}
