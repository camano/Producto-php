<?php
class rolVO
{
    public $rolId;
    public $rolNombre;

    /**
     * Get the value of rolId
     */ 
    public function getRolId()
    {
        return $this->rolId;
    }

    /**
     * Set the value of rolId
     *
     * @return  self
     */ 
    public function setRolId($rolId)
    {
        $this->rolId = $rolId;

        return $this;
    }

    /**
     * Get the value of rolNombre
     */ 
    public function getRolNombre()
    {
        return $this->rolNombre;
    }

    /**
     * Set the value of rolNombre
     *
     * @return  self
     */ 
    public function setRolNombre($rolNombre)
    {
        $this->rolNombre = $rolNombre;

        return $this;
    }
}
