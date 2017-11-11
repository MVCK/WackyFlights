<?php

class Plane extends Entity {

    public $id, $planeName, $manufacturer, $model, $price, $seats, $reach, $cruise, $takeoff, $hourly;

    public function __construct()
    {
        parent::__construct();
    }

    public function setId($value)
    {
        if(!is_numeric($value) || $value < 0) {
            $this->id = false;
            return false;
        }
        $this->id = $value;
        return true;
    }

    public function setPlaneName($value)
    {
        if(empty($value) || trim($value) == false) {
            $this->planeName = false;
            return false;
        }
        $this->planeName = $value;
        return true;
    }

    public function setManufacturer($value)
    {
        if(empty($value) || trim($value) == false) {
            $this->manufacturer = false;
            return false;
        }
        $this->manufacturer = $value;
        return true;
    }

    public function setModel($value)
    {
        if(empty($value) || trim($value) == false) {
            $this->model = false;
            return false;
        }
        $this->model = $value;
        return true;
    }

    public function setPrice($value)
    {
        if(!is_numeric($value) || $value < 1) {
            $this->price = false;
            return false;
        }
        $this->price = $value;
        return true;
    }

    public function setSeats($value)
    {
        if(!is_numeric($value) || $value < 1) {
            $this->seats = false;
            return false;
        }
        $this->seats = $value;
        return true;
    }

    public function setReach($value) {
        if(!is_numeric($value) || $value < 300) {
            $this->reach = false;
            return false;
        }
        $this->reach = $value;
        return true;
    }

    public function setCruise($value) {
        if(!is_numeric($value) || $value < 300) {
            $this->cruise = false;
            return false;
        }
        $this->cruise = $value;
        return true;
    }

    public function setTakeoff($value) {
        if(!is_numeric($value) || $value < 300) {
            $this->takeoff = false;
            return false;
        }
        $this->takeoff = $value;
        return true;
    }

    public function setHourly($value) {
        if(!is_numeric($value) || $value < 300) {
            $this->hourly = false;
            return false;
        }
        $this->hourly = $value;
        return true;
    }
}
