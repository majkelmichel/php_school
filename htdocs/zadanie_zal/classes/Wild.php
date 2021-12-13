<?php


class Wild extends Animal
{
    protected bool $carnivore;
    protected int $topSpeed; // in %

    /**
     * @param bool $carnivore
     * @param int $topSpeed
     * @param int $food
     * @param int $age
     */
    public function __construct(bool $carnivore, int $topSpeed, int $food, int $age)
    {
        parent::__construct($food, $age);
        $this->carnivore = $carnivore;
        $this->topSpeed = $topSpeed;
    }

    /**
     * @return bool
     */
    public function isCarnivore(): bool
    {
        return $this->carnivore;
    }

    /**
     * @param bool $carnivore
     */
    public function setCarnivore(bool $carnivore): void
    {
        $this->carnivore = $carnivore;
    }

    /**
     * @return int
     */
    public function getTopSpeed(): int
    {
        return $this->topSpeed;
    }

    /**
     * @param int $topSpeed
     */
    public function setTopSpeed(int $topSpeed): void
    {
        $this->topSpeed = $topSpeed;
    }

    public function run() {
        $this->topSpeed += 0.1;
    }

    public function __toString()
    {
        $eat = $this->carnivore ? "carnivore" : "herbivore";
        return "I'm a wild animal. My top speed is $this->topSpeed. I'm $eat";
    }


}