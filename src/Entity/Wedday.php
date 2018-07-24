<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeddayRepository")
 */
class Wedday
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creation_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $planned_date;

    /**
     * @ORM\Column(type="text")
     */
    private $thanks;

    /**
     * @ORM\Column(type="text")
     */
    private $welcome_message;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link_fb;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link_twitter;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link_insta;

    public function getId()
    {
        return $this->id;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getPlannedDate(): ?\DateTimeInterface
    {
        return $this->planned_date;
    }

    public function setPlannedDate(\DateTimeInterface $planned_date): self
    {
        $this->planned_date = $planned_date;

        return $this;
    }

    public function getThanks(): ?string
    {
        return $this->thanks;
    }

    public function setThanks(string $thanks): self
    {
        $this->thanks = $thanks;

        return $this;
    }

    public function getWelcomeMessage(): ?string
    {
        return $this->welcome_message;
    }

    public function setWelcomeMessage(string $welcome_message): self
    {
        $this->welcome_message = $welcome_message;

        return $this;
    }

    public function getLinkFb(): ?string
    {
        return $this->link_fb;
    }

    public function setLinkFb(?string $link_fb): self
    {
        $this->link_fb = $link_fb;

        return $this;
    }

    public function getLinkTwitter(): ?string
    {
        return $this->link_twitter;
    }

    public function setLinkTwitter(?string $link_twitter): self
    {
        $this->link_twitter = $link_twitter;

        return $this;
    }

    public function getLinkInsta(): ?string
    {
        return $this->link_insta;
    }

    public function setLinkInsta(?string $link_insta): self
    {
        $this->link_insta = $link_insta;

        return $this;
    }
}
