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
        echo $data;
    }

    function airports()
    {
        $this->load->model('airports');
        $data = json_encode($this->airports->all());
        echo $data;
    }

    function fleet()
    {
        $this->load->model('fleet');
        $data = json_encode($this->fleet->all());
        echo $data;
    }

    function flights()
    {
        $this->load->model('flightschedule');
        $data = json_encode($this->flights->all());
        echo $data;
    }
}