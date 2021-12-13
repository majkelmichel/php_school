<?php

class Dolphin extends Wild
{
    private int $currentSpeed;
    private bool $isChipped;

    /**
     * @param int $currentSpeed
     * @param bool $isChipped
     * @param bool $carnivore
     * @param int $topSpeed
     * @param int $food
     * @param int $age
     */
    public function __construct(int $currentSpeed, bool $isChipped, bool $carnivore, int $topSpeed, int $food, int $age)
    {
        parent::__construct($carnivore, $topSpeed, $food, $age);
        $this->currentSpeed = $currentSpeed;
        $this->isChipped = $isChipped;
    }


    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return bool
     */
    public function isChipped(): bool
    {
        return $this->isChipped;
    }

    /**
     * @param bool $isChipped
     */
    public function setIsChipped(bool $isChipped): void
    {
        $this->isChipped = $isChipped;
    }

    public function accelerate(): void {
        $this->currentSpeed += 5;
    }

    public function __toString()
    {
        return "I'm a dolphin. That's it. I swim at $this->currentSpeed km/h.";
    }


}