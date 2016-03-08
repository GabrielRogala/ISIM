<?php

namespace AppBundle\Entity;

/**
 * TblWebsite
 */
class TblWebsite
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $block1;

    /**
     * @var string
     */
    private $block2;

    /**
     * @var string
     */
    private $block3;

    /**
     * @var integer
     */
    private $idWebsite;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return TblWebsite
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
     * Set block1
     *
     * @param string $block1
     *
     * @return TblWebsite
     */
    public function setBlock1($block1)
    {
        $this->block1 = $block1;

        return $this;
    }

    /**
     * Get block1
     *
     * @return string
     */
    public function getBlock1()
    {
        return $this->block1;
    }

    /**
     * Set block2
     *
     * @param string $block2
     *
     * @return TblWebsite
     */
    public function setBlock2($block2)
    {
        $this->block2 = $block2;

        return $this;
    }

    /**
     * Get block2
     *
     * @return string
     */
    public function getBlock2()
    {
        return $this->block2;
    }

    /**
     * Set block3
     *
     * @param string $block3
     *
     * @return TblWebsite
     */
    public function setBlock3($block3)
    {
        $this->block3 = $block3;

        return $this;
    }

    /**
     * Get block3
     *
     * @return string
     */
    public function getBlock3()
    {
        return $this->block3;
    }

    /**
     * Get idWebsite
     *
     * @return integer
     */
    public function getIdWebsite()
    {
        return $this->idWebsite;
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
     * @return TblWebsite
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
