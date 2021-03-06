<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Profile", cascade={"persist"})
     */
    protected $profile;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set profile
     *
     * @param \TBR\FrontBundle\Entity\Profile $profile
     *
     * @return User
     */
    public function setProfile(\TBR\FrontBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \TBR\FrontBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
