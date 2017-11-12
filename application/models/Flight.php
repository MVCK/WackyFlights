<?php

class Flight extends Entity {

    public $id, $departureTime, $arrivalTime, $departureAirport, $arrivalAirport, $plane;

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

    public function setDepartureTime($value)
    {
        if(!preg_match('(0[8-9]:[0-5][0-9]|1[0-9]:[0-5][0-9]|2[0-3]:[0-5][0-9])',$value)) {
            $this->departureTime = false;
            return false;
        }
        $this->departureTime = $value;
        return true;
    }

    public function setArrivalTime($value)
    {
        if(!preg_match('(0[0-9]:[0-5][0-9]|1[0-9]:[0-5][0-9]|2[0-1]:[0-5][0-9]|22:00)',$value)) {
            $this->arrivalTime = false;
            return false;
        }
        $this->arrivalTime = $value;
        return true;
    }

    public function setDepartureAirport($value)
    {
        $this->load->model('airports');
        $airports = $this->airports->all();
        if(array_search($value, array_column($airports, 'id')) === false) {
            $this->departureAirport = false;
            return false;
        }
        $this->departureAirport = $value;
        return true;
    }

    public function setArrivalAirport($value)
    {
        $this->load->model('airports');
        $airports = $this->airports->all();
        if(array_search($value, array_column($airports, 'id')) === false) {
            $this->arrivalAirport = false;
            return false;
        }
        $this->arrivalAirport = $value;
        return true;
    }

    public function setPlane($value)
    {
        if(empty($value) || trim($value) == false) {
            $this->plane = false;
            return false;
        }

        $copy = str_replace(" ", "", $value);
        if(!ctype_alnum($copy)) {
            $this->planeName = false;
            return false;
        }

        $this->plane = $value;
        return true;
    }
}
