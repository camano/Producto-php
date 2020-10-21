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
        $sql = "SELECT * FROM usuario";
        $stmt = $con->conectar()->prepare($sql);
        $stmt->execute();
        while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new usuarioVO();
            $usuario->setUsuarioId($resultado['usuarioId']);
            $usuario->setUsuarioNombre($resultado['usuarioNombre']);
            $usuario->setUsuarioTelefono($resultado['usuarioTelefono']);
            $usuario->setUsuarioCorreo($resultado['usuarioCorreo']);
            
            $array[$cont]=$usuario;
            $cont++;
        }
        return $array;
    }
}
