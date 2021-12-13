<?php


class Dog extends Pet
{
    private string $breed;
    private string $favoriteToy;

    /**
     * Dog constructor.
     * @param string $breed
     * @param string $favoriteToy
     * @param string $name
     * @param int $happinessLevel
     * @param int $food
     * @param int $age
     */
    public function __construct(string $breed, string $favoriteToy, string $name, int $happinessLevel, int $food, int $age)
    {
        parent::__construct($name, $happinessLevel, $food, $age);
        $this->breed = $breed;
        $this->favoriteToy = $favoriteToy;
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
     * @return string
     */
    public function getFavoriteToy(): string
    {
        return $this->favoriteToy;
    }

    /**
     * @param string $favoriteToy
     */
    public function setFavoriteToy(string $favoriteToy): void
    {
        $this->favoriteToy = $favoriteToy;
    }

    /**
     * Go for a walk with a dog
     * Increases its happiness level
     */
    public function walk(): void
    {
        $this->happinessLevel += 50;
    }

    public function __toString()
    {
        return "Dog of breed: $this->breed. Name is $this->name.";
    }


}