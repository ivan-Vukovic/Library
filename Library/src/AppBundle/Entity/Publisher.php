<?php

namespace AppBundle\Entity;

class Publisher {

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $publisherId;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $publisherName;

    /**
     * Publisher constructor.
     * @param $publisherId
     * @param $publisherName
     */
    public function __construct($publisherId, $publisherName)
    {
        $this->publisherId = $publisherId;
        $this->publisherName = $publisherName;
    }

    /**
     * @return mixed
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * @param mixed $publisherId
     */
    public function setPublisherId($publisherId)
    {
        $this->publisherId = $publisherId;
    }

    /**
     * @return mixed
     */
    public function getPublisherName()
    {
        return $this->publisherName;
    }

    /**
     * @param mixed $publisherName
     */
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
    }



}
