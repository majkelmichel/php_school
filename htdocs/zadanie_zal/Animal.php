<?php


class Animal
{
    protected int $food;
    protected int $age;

    /**
     * Animal constructor.
     * @param int $food
     * @param int $age
     */
    public function __construct(int $food, int $age)
    {
        $this->food = $food;
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getFood(): int
    {
        return $this->food;
    }

    /**
     * @param int $food
     */
    public function setFood(int $food): void
    {
        $this->food = $food;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function feed(int $food): void {
        $this->setFood($this->food + $food);
    }

    public function isHungry(): bool {
        return $this->food < 20;
    }
}