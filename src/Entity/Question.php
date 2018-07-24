<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option_1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option_2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option_3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $option_4;

    /**
     * @ORM\Column(type="integer")
     */
    private $correct_response;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOption1(): ?string
    {
        return $this->option_1;
    }

    public function setOption1(string $option_1): self
    {
        $this->option_1 = $option_1;

        return $this;
    }

    public function getOption2(): ?string
    {
        return $this->option_2;
    }

    public function setOption2(string $option_2): self
    {
        $this->option_2 = $option_2;

        return $this;
    }

    public function getOption3(): ?string
    {
        return $this->option_3;
    }

    public function setOption3(string $option_3): self
    {
        $this->option_3 = $option_3;

        return $this;
    }

    public function getOption4(): ?string
    {
        return $this->option_4;
    }

    public function setOption4(string $option_4): self
    {
        $this->option_4 = $option_4;

        return $this;
    }

    public function getCorrectResponse(): ?int
    {
        return $this->correct_response;
    }

    public function setCorrectResponse(int $correct_response): self
    {
        $this->correct_response = $correct_response;

        return $this;
    }
}
