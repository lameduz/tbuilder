<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\RoomRepository")
 */
class Room
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="app_tag", type="string", length=255)
     */
    private $appTag;

    /**
     * @var string
     *
     * @ORM\Column(name="mic_required", type="boolean")
     */
    private $micRequired;

    /**
     * @var string
     *
     * @ORM\Column(name="min_level", type="integer")
     */
    private $minLevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_age", type="integer")
     */
    private $minAge;

    /**
     * @var string
     *
     * @ORM\Column(name="discord_link", type="string", length=255)
     */
    private $discordLink;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Profile", inversedBy="rooms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $profile;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Room
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Room
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set appTag
     *
     * @param string $appTag
     *
     * @return Room
     */
    public function setAppTag($appTag)
    {
        $this->appTag = $appTag;

        return $this;
    }

    /**
     * Get appTag
     *
     * @return string
     */
    public function getAppTag()
    {
        return $this->appTag;
    }

    /**
     * Set micRequired
     *
     * @param boolean $micRequired
     *
     * @return Room
     */
    public function setMicRequired($micRequired)
    {
        $this->micRequired = $micRequired;

        return $this;
    }

    /**
     * Get micRequired
     *
     * @return boolean
     */
    public function getMicRequired()
    {
        return $this->micRequired;
    }

    /**
     * Set minLevel
     *
     * @param integer $minLevel
     *
     * @return Room
     */
    public function setMinLevel($minLevel)
    {
        $this->minLevel = $minLevel;

        return $this;
    }

    /**
     * Get minLevel
     *
     * @return integer
     */
    public function getMinLevel()
    {
        return $this->minLevel;
    }

    /**
     * Set minAge
     *
     * @param integer $minAge
     *
     * @return Room
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;

        return $this;
    }

    /**
     * Get minAge
     *
     * @return integer
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Set discordLink
     *
     * @param string $discordLink
     *
     * @return Room
     */
    public function setDiscordLink($discordLink)
    {
        $this->discordLink = $discordLink;

        return $this;
    }

    /**
     * Get discordLink
     *
     * @return string
     */
    public function getDiscordLink()
    {
        return $this->discordLink;
    }

    /**
     * Set profile
     *
     * @param \UserBundle\Entity\Profile $profile
     *
     * @return Room
     */
    public function setProfile(\UserBundle\Entity\Profile $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \UserBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
