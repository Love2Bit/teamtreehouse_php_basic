<?php

/**
 * Excercise Extends
 */

class Cycle{
    public $color;
    public $speed;

    public function canRide()
    {
        echo "this can ride, this cycle have a color red and have speed 2km/hour";
    }
    public function __construct($color_bike,$speed_bike) {
        $this->color = $color_bike;
        $this->speed = $speed_bike;
    }

}

class ElectricCycle extends Cycle{
    public function resourcePower()
    {
        echo "This Cycle have batteries for power";
    }
}

$mini_scooter = new ElectricCycle("Red","2");
$mini_scooter->canRide();
$mini_scooter->resourcePower();