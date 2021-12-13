<?php


class Cat extends Pet
{
    private string $breed;
    private bool $goesOutside;

    /**
     * Cat constructor.
     * @param string $breed
     * @param bool $goesOutside
     * @param string $name
     * @param int $happinessLevel
     * @param int $food
     * @param int $age
     */
    public function __construct(string $breed, bool $goesOutside, string $name, int $happinessLevel, int $food, int $age)
    {
        parent::__construct($name, $happinessLevel, $food, $age);
        $this->breed = $breed;
        $this->goesOutside = $goesOutside;
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    public function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    /**
     * @return bool
     */
    public function isGoesOutside(): bool
    {
        return $this->goesOutside;
    }

    /**
     * @param bool $goesOutside
     */
    public function setGoesOutside(bool $goesOutside): void
    {
        $this->goesOutside = $goesOutside;
    }

    public function hunt(): void
    {
        if ($this->goesOutside) {
            $this->food += 40;
            $this->happinessLevel += 40;
        } else {
            echo "This cat does not go outside, so it cannot hunt";
        }
    }

    public function __toString()
    {
        return "I'm the king of breed $this->breed.";
    }


}