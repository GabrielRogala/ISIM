<?php

namespace AppBundle\Entity;

/**
 * TblRelation
 */
class TblRelation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\TblWebsite
     */
    private $idSite;

    /**
     * @var \AppBundle\Entity\TblWebsite
     */
    private $idParent;

    /**
     * @var \AppBundle\Entity\TblProject
     */
    private $idProject;


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
     * Set idSite
     *
     * @param \AppBundle\Entity\TblWebsite $idSite
     *
     * @return TblRelation
     */
    public function setIdSite(\AppBundle\Entity\TblWebsite $idSite = null)
    {
        $this->idSite = $idSite;

        return $this;
    }

    /**
     * Get idSite
     *
     * @return \AppBundle\Entity\TblWebsite
     */
    public function getIdSite()
    {
        return $this->idSite;
    }

    /**
     * Set idParent
     *
     * @param \AppBundle\Entity\TblWebsite $idParent
     *
     * @return TblRelation
     */
    public function setIdParent(\AppBundle\Entity\TblWebsite $idParent = null)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return \AppBundle\Entity\TblWebsite
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set idProject
     *
     * @param \AppBundle\Entity\TblProject $idProject
     *
     * @return TblRelation
     */
    public function setIdProject(\AppBundle\Entity\TblProject $idProject = null)
    {
        $this->idProject = $idProject;

        return $this;
    }

    /**
     * Get idProject
     *
     * @return \AppBundle\Entity\TblProject
     */
    public function getIdProject()
    {
        return $this->idProject;
    }
}
