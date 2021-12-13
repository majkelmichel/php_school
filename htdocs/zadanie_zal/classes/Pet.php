<?php


class Pet extends Animal
{
    protected string $name;
    protected int $happinessLevel;

    /**int $food, int $age
     * Pet constructor.
     * @param string $name
     * @param int $happinessLevel
     * @param int $food
     * @param int $age
     */
    public function __construct(string $name, int $happinessLevel, int $food, int $age)
    {
        parent::__construct($food, $age);
        $this->name = $name;
        $this->happinessLevel = $happinessLevel;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHappinessLevel(): int
    {
        return $this->happinessLevel;
    }

    /**
     * @param int $happinessLevel
     */
    public function setHappinessLevel(int $happinessLevel): void
    {
        if ($happinessLevel >= 0) {
            $this->happinessLevel = $happinessLevel;
        } else {
            echo "Poziom szcześcia nie może być mniejszy od 0";
        }
    }

    public function isHappy(): bool {
        return $this->happinessLevel > 40;
    }
}