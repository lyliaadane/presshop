<?php

namespace App\Entity;

use App\Repository\CGVSectionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CGVSectionsRepository::class)]
class CGVSections
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_update = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?CGV $version = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(?string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->date_update;
    }

    public function setDateUpdate(?\DateTimeInterface $date_update): static
    {
        $this->date_update = $date_update;

        return $this;
    }

    public function getVersion(): ?CGV
    {
        return $this->version;
    }

    public function setVersion(?CGV $version): static
    {
        $this->version = $version;

        return $this;
    }
}
