<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GenreRepository")
 */
class Genre{

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $genreName;

    /**
     * Genre constructor.
     * @param $id
     * @param $genreName
     */
    public function __construct($id, $genreName)
    {
        $this->id = $id;
        $this->genreName = $genreName;
    }

    /**
     * @return mixed
     */
    public function getid()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setid($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getGenreName()
    {
        return $this->genreName;
    }

    /**
     * @param mixed $genreName
     */
    public function setGenreName($genreName)
    {
        $this->genreName = $genreName;
    }



}
