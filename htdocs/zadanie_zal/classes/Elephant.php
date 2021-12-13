<?php

class Elephant extends Wild
{
    private int $weight;
    private bool $isScaredByMouse;

    /**
     * @param int $weight
     * @param bool $isScaredByMouse
     * @param bool $carnivore
     * @param int $topSpeed
     * @param int $food
     * @param int $age
     */
    public function __construct(int $weight, bool $isScaredByMouse, bool $carnivore, int $topSpeed, int $food, int $age)
    {
        parent::__construct($carnivore, $topSpeed, $food, $age);
        $this->weight = $weight;
        $this->isScaredByMouse = $isScaredByMouse;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return bool
     */
    public function isScaredByMouse(): bool
    {
        return $this->isScaredByMouse;
    }

    /**
     * @param bool $isScaredByMouse
     */
    public function setIsScaredByMouse(bool $isScaredByMouse): void
    {
        $this->isScaredByMouse = $isScaredByMouse;
    }

    /**
     * makes elephant sound
     */
    public function makeSound(): void {
        echo "bahruuuuuuhhhhaaaaa";
    }

    public function __toString()
    {
        return "I'm an elephant. I weight $this->weight kg.";
    }


}