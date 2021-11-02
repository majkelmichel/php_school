<?php


class Car
{
    public $model;
    public $color;
    public $distance;
    public $fuel;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
        $this->distance = 0;
        $this->fuel = 0;
    }

    function maxRange() {
        return $this->fuel * 10;
    }

    function go($distance, $speed) {
        if ($this->maxRange() < $distance) {
            $this->distance += $distance;
            echo "Jade z prędkością $speed";
        } else {
            echo "nie jade";
        }
    }

    function tankowanie($litry) {
        $this->fuel += $litry;
    }
}