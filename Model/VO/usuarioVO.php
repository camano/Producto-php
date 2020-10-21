<?php
class usuarioVO
{
    public $usuarioId;
    public $usuarioNombre;
    public $usuarioTelefono;
    public $usuarioCorreo;
    public $usuarioClave;
    public $rolVO;


  

    /**
     * Get the value of usuarioId
     */ 
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set the value of usuarioId
     *
     * @return  self
     */ 
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get the value of usuarioNombre
     */ 
    public function getUsuarioNombre()
    {
        return $this->usuarioNombre;
    }

    /**
     * Set the value of usuarioNombre
     *
     * @return  self
     */ 
    public function setUsuarioNombre($usuarioNombre)
    {
        $this->usuarioNombre = $usuarioNombre;

        return $this;
    }

    /**
     * Get the value of usuarioTelefono
     */ 
    public function getUsuarioTelefono()
    {
        return $this->usuarioTelefono;
    }

    /**
     * Set the value of usuarioTelefono
     *
     * @return  self
     */ 
    public function setUsuarioTelefono($usuarioTelefono)
    {
        $this->usuarioTelefono = $usuarioTelefono;

        return $this;
    }

    /**
     * Get the value of usuarioCorreo
     */ 
    public function getUsuarioCorreo()
    {
        return $this->usuarioCorreo;
    }

    /**
     * Set the value of usuarioCorreo
     *
     * @return  self
     */ 
    public function setUsuarioCorreo($usuarioCorreo)
    {
        $this->usuarioCorreo = $usuarioCorreo;

        return $this;
    }

    /**
     * Get the value of usuarioClave
     */ 
    public function getUsuarioClave()
    {
        return $this->usuarioClave;
    }

    /**
     * Set the value of usuarioClave
     *
     * @return  self
     */ 
    public function setUsuarioClave($usuarioClave)
    {
        $this->usuarioClave = $usuarioClave;

        return $this;
    }

    /**
     * Get the value of rolVO
     */ 
    public function getRolVO()
    {
        return $this->rolVO;
    }

    /**
     * Set the value of rolVO
     *
     * @return  self
     */ 
    public function setRolVO($rolVO)
    {
        $this->rolVO = $rolVO;

        return $this;
    }
}
