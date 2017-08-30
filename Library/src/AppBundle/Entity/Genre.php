<?php

namespace AppBundle\Entity;

class Genre{

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $genreId;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $genreName;

    /**
     * Genre constructor.
     * @param $genreId
     * @param $genreName
     */
    public function __construct($genreId, $genreName)
    {
        $this->genreId = $genreId;
        $this->genreName = $genreName;
    }

    /**
     * @return mixed
     */
    public function getGenreId()
    {
        return $this->genreId;
    }

    /**
     * @param mixed $genreId
     */
    public function setGenreId($genreId)
    {
        $this->genreId = $genreId;
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
