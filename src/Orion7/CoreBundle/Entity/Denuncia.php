<?php
// src/Blogger/BlogBundle/Entity/Blog.php

namespace Orion7\CoreBundle\Entity;

class Denuncia
{
    protected $id;
    protected $incidente;
    protected $relato;
    protected $via;
    protected $tipo_denunciante;
    protected $responsable;
    protected $hora_hecho;
    protected $hora_registro;
    protected $subcategorias;
    protected $nombre_denunciante;
    protected $telefono_denunciante;
    protected $correo_denunciante;
    protected $twitter_handle_denunciante;
    protected $genera_retraso_injustificado;
    protected $usuario_registro;
    protected $usuario_filtrado;
    /**
     * @var string
     */
    private $telefonos_denunciante;

    /**
     * @var string
     */
    private $twitter_denunciante;

    /**
     * @var boolean
     */
    private $genera_retraso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $responsables;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->responsables = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subcategorias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set hora_hecho
     *
     * @param \DateTime $horaHecho
     * @return Denuncia
     */
    public function setHoraHecho($horaHecho)
    {
        $this->hora_hecho = $horaHecho;
    
        return $this;
    }

    /**
     * Get hora_hecho
     *
     * @return \DateTime 
     */
    public function getHoraHecho()
    {
        return $this->hora_hecho;
    }

    /**
     * Set hora_registro
     *
     * @param \DateTime $horaRegistro
     * @return Denuncia
     */
    public function setHoraRegistro($horaRegistro)
    {
        $this->hora_registro = $horaRegistro;
    
        return $this;
    }

    /**
     * Get hora_registro
     *
     * @return \DateTime 
     */
    public function getHoraRegistro()
    {
        return $this->hora_registro;
    }

    /**
     * Set relato
     *
     * @param string $relato
     * @return Denuncia
     */
    public function setRelato($relato)
    {
        $this->relato = $relato;
    
        return $this;
    }

    /**
     * Get relato
     *
     * @return string 
     */
    public function getRelato()
    {
        return $this->relato;
    }

    /**
     * Set nombre_denunciante
     *
     * @param string $nombreDenunciante
     * @return Denuncia
     */
    public function setNombreDenunciante($nombreDenunciante)
    {
        $this->nombre_denunciante = $nombreDenunciante;
    
        return $this;
    }

    /**
     * Get nombre_denunciante
     *
     * @return string 
     */
    public function getNombreDenunciante()
    {
        return $this->nombre_denunciante;
    }

    /**
     * Set telefonos_denunciante
     *
     * @param string $telefonosDenunciante
     * @return Denuncia
     */
    public function setTelefonosDenunciante($telefonosDenunciante)
    {
        $this->telefonos_denunciante = $telefonosDenunciante;
    
        return $this;
    }

    /**
     * Get telefonos_denunciante
     *
     * @return string 
     */
    public function getTelefonosDenunciante()
    {
        return $this->telefonos_denunciante;
    }

    /**
     * Set correo_denunciante
     *
     * @param string $correoDenunciante
     * @return Denuncia
     */
    public function setCorreoDenunciante($correoDenunciante)
    {
        $this->correo_denunciante = $correoDenunciante;
    
        return $this;
    }

    /**
     * Get correo_denunciante
     *
     * @return string 
     */
    public function getCorreoDenunciante()
    {
        return $this->correo_denunciante;
    }

    /**
     * Set twitter_denunciante
     *
     * @param string $twitterDenunciante
     * @return Denuncia
     */
    public function setTwitterDenunciante($twitterDenunciante)
    {
        $this->twitter_denunciante = $twitterDenunciante;
    
        return $this;
    }

    /**
     * Get twitter_denunciante
     *
     * @return string 
     */
    public function getTwitterDenunciante()
    {
        return $this->twitter_denunciante;
    }

    /**
     * Set genera_retraso
     *
     * @param boolean $generaRetraso
     * @return Denuncia
     */
    public function setGeneraRetraso($generaRetraso)
    {
        $this->genera_retraso = $generaRetraso;
    
        return $this;
    }

    /**
     * Get genera_retraso
     *
     * @return boolean 
     */
    public function getGeneraRetraso()
    {
        return $this->genera_retraso;
    }

    /**
     * Set incidente
     *
     * @param \Orion7\CoreBundle\Entity\Incidente $incidente
     * @return Denuncia
     */
    public function setIncidente(\Orion7\CoreBundle\Entity\Incidente $incidente = null)
    {
        $this->incidente = $incidente;
    
        return $this;
    }

    /**
     * Get incidente
     *
     * @return \Orion7\CoreBundle\Entity\Incidente 
     */
    public function getIncidente()
    {
        return $this->incidente;
    }

    /**
     * Set via
     *
     * @param \Orion7\CoreBundle\Entity\Via $via
     * @return Denuncia
     */
    public function setVia(\Orion7\CoreBundle\Entity\Via $via = null)
    {
        $this->via = $via;
    
        return $this;
    }

    /**
     * Get via
     *
     * @return \Orion7\CoreBundle\Entity\Via 
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Set tipo_denunciante
     *
     * @param \Orion7\CoreBundle\Entity\Tipo_denunciante $tipoDenunciante
     * @return Denuncia
     */
    public function setTipoDenunciante(\Orion7\CoreBundle\Entity\Tipo_denunciante $tipoDenunciante = null)
    {
        $this->tipo_denunciante = $tipoDenunciante;
    
        return $this;
    }

    /**
     * Get tipo_denunciante
     *
     * @return \Orion7\CoreBundle\Entity\Tipo_denunciante 
     */
    public function getTipoDenunciante()
    {
        return $this->tipo_denunciante;
    }

    /**
     * Add responsables
     *
     * @param \Orion7\CoreBundle\Entity\Responsable $responsables
     * @return Denuncia
     */
    public function addResponsable(\Orion7\CoreBundle\Entity\Responsable $responsables)
    {
        $this->responsables[] = $responsables;
    
        return $this;
    }

    /**
     * Remove responsables
     *
     * @param \Orion7\CoreBundle\Entity\Responsable $responsables
     */
    public function removeResponsable(\Orion7\CoreBundle\Entity\Responsable $responsables)
    {
        $this->responsables->removeElement($responsables);
    }

    /**
     * Get responsables
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsables()
    {
        return $this->responsables;
    }

    /**
     * Add subcategorias
     *
     * @param \Orion7\CoreBundle\Entity\Subcategoria $subcategorias
     * @return Denuncia
     */
    public function addSubcategoria(\Orion7\CoreBundle\Entity\Subcategoria $subcategorias)
    {
        $this->subcategorias[] = $subcategorias;
    
        return $this;
    }

    /**
     * Remove subcategorias
     *
     * @param \Orion7\CoreBundle\Entity\Subcategoria $subcategorias
     */
    public function removeSubcategoria(\Orion7\CoreBundle\Entity\Subcategoria $subcategorias)
    {
        $this->subcategorias->removeElement($subcategorias);
    }

    /**
     * Get subcategorias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubcategorias()
    {
        return $this->subcategorias;
    }
}