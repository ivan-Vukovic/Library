<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 */
class Book {

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
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Author")
     * @ORM\JoinTable(name="books_authors",
     *      joinColumns={@JoinColumn(name="book_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="author_id", referencedColumnName="id")}
     *      )
     */
    private $authors;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $publicationDate;

    /**
     * @var Publisher
     * @ManyToOne(targetEntity="AppBundle\Entity\Publisher")
     * @JoinColumn(nullable=false)
     */
    private $publisher;

    /**
     * @var Genre
     * @ManyToOne(targetEntity="AppBundle\Entity\Genre")
     * @JoinColumn(nullable=false)
     */
    private $genre;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $actionPrice;

    /**
     * Book constructor.
     * @param $id
     * @param $title
     * @param $authors
     * @param $publicationDate
     * @param $publisher
     * @param $genre
     * @param $price
     * @param $actionPrice
     */
    public function __construct($id, $title, $authors, $publicationDate, $publisher, $genre, $price, $actionPrice)
    {
        $this->id = $id;
        $this->title = $title;
        $this->authors = $authors;
        $this->publicationDate = $publicationDate;
        $this->publisher = $publisher;
        $this->genre = $genre;
        $this->price = $price;
        $this->actionPrice = $actionPrice;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @param mixed $authors
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param mixed $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getActionPrice()
    {
        return $this->actionPrice;
    }

    /**
     * @param mixed $actionPrice
     */
    public function setActionPrice($actionPrice)
    {
        $this->actionPrice = $actionPrice;
    }
    
    


}