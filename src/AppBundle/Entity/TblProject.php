<?php

namespace AppBundle\Entity;

/**
 * TblProject
 */
class TblProject
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $idProject;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return TblProject
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get idProject
     *
     * @return integer
     */
    public function getIdProject()
    {
        return $this->idProject;
    }
    /**
     * @var string
     */
    private $path;


    /**
     * Set path
     *
     * @param string $path
     *
     * @return TblProject
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
