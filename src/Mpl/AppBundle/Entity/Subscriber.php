<?php

namespace Mpl\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscriber
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mpl\AppBundle\Entity\SubscriberRepository")
 */
class Subscriber
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=255)
     */
    private $courriel;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=100)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $date_created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime")
     */
    private $date_modified;

    /**
     * @var array
     *
     * @ORM\Column(name="genres", type="simple_array")
     */
    private $genres;
    
    /**
     * @var string
     *
     * @ORM\Column(name="test", type="string", length=100)
     */
    private $test;


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
     * Set email
     *
     * @param string $email
     * @return Subscriber
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Subscriber
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set date_created
     *
     * @param \DateTime $dateCreated
     * @return Subscriber
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;
    
        return $this;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set date_modified
     *
     * @param \DateTime $dateModified
     * @return Subscriber
     */
    public function setDateModified($dateModified)
    {
        $this->date_modified = $dateModified;
    
        return $this;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }

    /**
     * Set genres
     *
     * @param array $genres
     * @return Subscriber
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;
    
        return $this;
    }

    /**
     * Get genres
     *
     * @return array 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set test
     *
     * @param string $test
     * @return Subscriber
     */
    public function setTest($test)
    {
        $this->test = $test;
    
        return $this;
    }

    /**
     * Get test
     *
     * @return string 
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set courriel
     *
     * @param string $courriel
     * @return Subscriber
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;
    
        return $this;
    }

    /**
     * Get courriel
     *
     * @return string 
     */
    public function getCourriel()
    {
        return $this->courriel;
    }
}