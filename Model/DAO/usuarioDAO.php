<?php

class usuarioDAO extends mainModel
{
    public function inicio()
    {
        return "inicio";
    }

    public static function listarusuario()
    {

        $array = [];
        $cont = 0;
        $sql = "select * from usuario inner join rol on usuarioRol=rolId;";
        $stmt = mainModel::conectar()->prepare($sql);
        $stmt->execute();
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new usuarioVO();
            $rol = new rolVO();
            $usuario->setUsuarioId($resultado['usuarioId']);
            $usuario->setUsuarioNombre($resultado['usuarioNombre']);
            $usuario->setUsuarioTelefono($resultado['usuarioTelefono']);
            $usuario->setUsuarioCorreo($resultado['usuarioCorreo']);
            $usuario->setUsuarioEstado($resultado['usuarioEstado']);
            $rol->setRolId($resultado['rolId']);
            $rol->setRolNombre($resultado['rolNombre']);
            $usuario->setRolVO($rol);
            $array[$cont] = $usuario;
            $cont++;
        }
        return $array;
    }

    public static function eliminar_Usuario_modelo($id)
    {
        $sql = mainModel::conectar()->prepare("DELETE FROM usuario WHERE usuarioId=:usuarioID");
        $sql->bindParam(':usuarioID',$id);
        $sql->execute();
        return $sql;
        
    }
    public static function metodo_consultar_usuario($id)
    {

        $array = [];
        $cont = 0;
        $sql = "select * from usuario inner join rol on usuarioRol=rolId where usuarioId=".$id;
        $stmt = mainModel::conectar()->prepare($sql);
        $stmt->execute();
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new usuarioVO();
            $rol = new rolVO();
            $usuario->setUsuarioId($resultado['usuarioId']);
            $usuario->setUsuarioNombre($resultado['usuarioNombre']);
            $usuario->setUsuarioTelefono($resultado['usuarioTelefono']);
            $usuario->setUsuarioCorreo($resultado['usuarioCorreo']);
            $usuario->setUsuarioEstado($resultado['usuarioEstado']);
            $rol->setRolId($resultado['rolId']);
            $rol->setRolNombre($resultado['rolNombre']);
            $usuario->setRolVO($rol);
            $array[$cont] = $usuario;
            $cont++;
        }
        return $array;
    }

    public  static function metodo_editar_usuario(usuarioVO $usuario){
        $rol = new rolVO();
        $sql=mainModel::conectar()->prepare("call ActualizarUsuario(:usuarioNombre,:usuarioTelefono,:usuarioCorreo,:usuarioRol,:usuarioId)");
        $sql->bindParam(':usuarioNombre',$usuario->getUsuarioNombre());
        $sql->bindParam(':usuarioTelefono',$usuario->getUsuarioTelefono());
        $sql->bindParam(':usuarioCorreo',$usuario->getUsuarioCorreo());
        $sql->bindParam(':usuarioRol',$usuario->getRolVO()->getrolId());
        $sql->bindParam(':usuarioId',$usuario->getUsuarioId());
        $sql->execute();
        return $sql;


    }
}
