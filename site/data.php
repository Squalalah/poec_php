<?php
class Product
{

    /**
     * @var string
     */
    private $reference;

    /**
     * Price in €
     * @var float
     */
    private $price;

    /**
     * Class constructor.
     */
    public function __construct(string $reference = null, float $price = null)
    {
        $this->reference = $reference;
        $this->price = $price;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
}

$data = [
    new Product('Table basse gere7de4x', 52),
    new Product('Stylo plume Mont Rouge', 25_414)
];
