<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * A ser
 */

class Info extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function airplanes()
    {
        $this->load->model('airplanes');
        $data = json_encode($this->airplanes->all());
        return $data;
    }

    function airports()
    {
        $this->load->model('airports');
        $data = json_encode($this->airports->all());
        return $data;
    }

    function fleet()
    {
        $this->load->model('fleet');
        $data = json_encode($this->fleet->all());
        return $data;
    }

    function flights()
    {
        $this->load->model('FlightSchedule');
        $data = json_encode($this->flights->all());
        return $data;
    }
}