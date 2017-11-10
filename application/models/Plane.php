<?php

class Plane extends Entity {

    public $id, $planeName, $manufacturer, $model, $price, $seats, $reach, $cruise, $takeoff, $hourly;

    public function __construct()
    {
        parent::__construct();
    }

    public function setId($value)
    {
        if($value < 0) {
            $this->id = false;
            return false;
        }
        $this->id = $value;
        return true;
    }

    public function setPlaneName($value)
    {
        $this->planeName = $value;
        return true;
    }

    public function setManufacturer($value)
    {
        $this->manufacturer = $value;
        return true;
    }

    public function setModel($value)
    {
        $this->model = $value;
        return true;
    }

    public function setPrice($value)
    {
        $this->price = $value;
        return true;
    }

    public function setSeats($value)
    {
        $this->seats = $value;
        return true;
    }

    public function setReach($value) {
        $this->reach = $value;
        return true;
    }

    public function setCruise($value) {
        $this->cruise = $value;
        return true;
    }

    public function setTakeoff($value) {
        $this->takeoff = $value;
        return true;
    }

    public function setHourly($value) {
        $this->hourly = $value;
        return true;
    }
}
