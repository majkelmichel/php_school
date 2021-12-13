<?php

class Person
{
    protected string $name;
    protected string $gender;
    protected int $age;

    /**
     * @param string $name
     * @param string $gender
     * @param int $age
     */
    public function __construct(string $name, string $gender, int $age)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }


    function walk()
    {
    }

    function sit()
    {
    }

    function sleep()
    {
    }
}

class Programmer
{
    private string $name;
    private string $gender;
    private int $age;
    private string $language;

    /**
     * @param string $name
     * @param string $gender
     * @param int $age
     * @param string $language
     */
    public function __construct(string $name, string $gender, int $age, string $language)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->language = $language;
    }

    function walk()
    {
    }

    function sit()
    {
    }

    function sleep()
    {
    }

    function writeCode()
    {
    }
}

class Driver
{
    private string $name;
    private string $gender;
    private int $age;
    private int $drivingExperience;

    /**
     * @param string $name
     * @param string $gender
     * @param int $age
     * @param int $drivingExperience
     */
    public function __construct(string $name, string $gender, int $age, int $drivingExperience)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->drivingExperience = $drivingExperience;
    }

    function walk()
    {
    }

    function sit()
    {
    }

    function sleep()
    {
    }

    function drive()
    {
    }
}

class Student
{
    private string $name;
    private string $gender;
    private int $age;
    private int $averageScore;

    /**
     * @param string $name
     * @param string $gender
     * @param int $age
     * @param int $averageScore
     */
    public function __construct(string $name, string $gender, int $age, int $averageScore)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->averageScore = $averageScore;
    }


    function walk()
    {
    }

    function sit()
    {
    }

    function sleep()
    {
    }

    function learn()
    {
    }
}

class TaxiDriver
{
    private string $name;
    private string $gender;
    private int $age;
    private int $drivingExperience;
    private int $seatsCount;

    /**
     * @param string $name
     * @param string $gender
     * @param int $age
     * @param int $drivingExperience
     * @param int $seatsCount
     */
    public function __construct(string $name, string $gender, int $age, int $drivingExperience, int $seatsCount)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->drivingExperience = $drivingExperience;
        $this->seatsCount = $seatsCount;
    }


    function walk()
    {
    }

    function sit()
    {
    }

    function sleep()
    {
    }

    function drive()
    {
    }

    function carryPassengers()
    {
    }
}
