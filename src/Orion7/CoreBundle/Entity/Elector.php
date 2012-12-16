<?php

namespace Orion7\CoreBundle\Entity;

class Elector
{
    protected $letra_cedula;
    protected $cedula;
    protected $primer_apellido;
    protected $segundo_apellido;
    protected $primer_nombre;
    protected $segundo_nombre;
    protected $fecha_nacimiento;
    protected $estado;
    protected $municipio;
    protected $parroquia;
    protected $centro;

    /**
     * Set letra_cedula
     *
     * @param string $letraCedula
     * @return Elector
     */
    public function setLetraCedula($letraCedula)
    {
        $this->letra_cedula = $letraCedula;
    
        return $this;
    }

    /**
     * Get letra_cedula
     *
     * @return string 
     */
    public function getLetraCedula()
    {
        return $this->letra_cedula;
    }

    /**
     * Set cedula
     *
     * @param integer $cedula
     * @return Elector
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set primer_apellido
     *
     * @param string $primerApellido
     * @return Elector
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primer_apellido = $primerApellido;
    
        return $this;
    }

    /**
     * Get primer_apellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primer_apellido;
    }

    /**
     * Set segundo_apellido
     *
     * @param string $segundoApellido
     * @return Elector
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundo_apellido = $segundoApellido;
    
        return $this;
    }

    /**
     * Get segundo_apellido
     *
     * @return string 
     */
    public function getSegundoApellido()
    {
        return $this->segundo_apellido;
    }

    /**
     * Set primer_nombre
     *
     * @param string $primerNombre
     * @return Elector
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primer_nombre = $primerNombre;
    
        return $this;
    }

    /**
     * Get primer_nombre
     *
     * @return string 
     */
    public function getPrimerNombre()
    {
        return $this->primer_nombre;
    }

    /**
     * Set segundo_nombre
     *
     * @param string $segundoNombre
     * @return Elector
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundo_nombre = $segundoNombre;
    
        return $this;
    }

    /**
     * Get segundo_nombre
     *
     * @return string 
     */
    public function getSegundoNombre()
    {
        return $this->segundo_nombre;
    }

    /**
     * Set fecha_nacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Elector
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fecha_nacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fecha_nacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Elector
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set municipio
     *
     * @param integer $municipio
     * @return Elector
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    
        return $this;
    }

    /**
     * Get municipio
     *
     * @return integer 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set parroquia
     *
     * @param integer $parroquia
     * @return Elector
     */
    public function setParroquia($parroquia)
    {
        $this->parroquia = $parroquia;
    
        return $this;
    }

    /**
     * Get parroquia
     *
     * @return integer 
     */
    public function getParroquia()
    {
        return $this->parroquia;
    }

    /**
     * Set centro
     *
     * @param \Orion7\CoreBundle\Entity\Centro $centro
     * @return Elector
     */
    public function setCentro(\Orion7\CoreBundle\Entity\Centro $centro = null)
    {
        $this->centro = $centro;
    
        return $this;
    }

    /**
     * Get centro
     *
     * @return \Orion7\CoreBundle\Entity\Centro 
     */
    public function getCentro()
    {
        return $this->centro;
    }
}