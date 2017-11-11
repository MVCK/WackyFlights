<?php

class Flight extends Entity {

    public $id, $departureTime, $arrivalTime, $departureAirport, $arrivalAirport, $plane;

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

    public function setDepartureTime($value)
    {
        $this->departureTime = $value;
        return true;
    }

    public function setArrivalTime($value)
    {
        $this->arrivalTime = $value;
        return true;
    }

    public function setDepartureAirport($value)
    {
        $this->departureAirport = $value;
        return true;
    }

    public function setArrivalAirport($value)
    {
        $this->arrivalAirport = $value;
        return true;
    }

    public function setPlane($value)
    {
        $this->plane = $value;
        return true;
    }
}
