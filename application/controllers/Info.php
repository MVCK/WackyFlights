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

    /**
     * Return all the airplanes in JSON format
     */
    function airplanes()
    {
        $this->load->model('airplanes');
        $data = json_encode($this->airplanes->all());
        echo $data;
    }

    /**
     * Returns all the airports in JSON format
     */
    function airports()
    {
        $this->load->model('airports');
        $data = json_encode($this->airports->all());
        echo $data;
    }

    /**
     * Returns all the flights in JSON format
     */
    function flights()
    {
        $this->load->model('flights');
        $data = json_encode($this->flights->all());
        echo $data;
    }
}