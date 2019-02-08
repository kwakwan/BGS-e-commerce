<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\SizeRepository")
 */
class Size
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $s;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $m;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $l;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="sizes")
     */
    private $productStock;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getXs(): ?int
    {
        return $this->xs;
    }

    public function setXs(?int $xs): self
    {
        $this->xs = $xs;

        return $this;
    }

    public function getS(): ?int
    {
        return $this->s;
    }

    public function setS(?int $s): self
    {
        $this->s = $s;

        return $this;
    }

    public function getM(): ?int
    {
        return $this->m;
    }

    public function setM(?int $m): self
    {
        $this->m = $m;

        return $this;
    }

    public function getL(): ?int
    {
        return $this->l;
    }

    public function setL(?int $l): self
    {
        $this->l = $l;

        return $this;
    }

    public function getXl(): ?int
    {
        return $this->xl;
    }

    public function setXl(?int $xl): self
    {
        $this->xl = $xl;

        return $this;
    }

    public function getProductStock(): ?Product
    {
        return $this->productStock;
    }

    public function setProductStock(?Product $productStock): self
    {
        $this->productStock = $productStock;

        return $this;
    }
}
