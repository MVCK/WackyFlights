<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * A service controller providing info in JSON format
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
    function fleet()
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

    /**
     * Returns an error message as this is just a service controller
     */
    function index()
    {
        echo "
        {
            \"error\": 
            {
                \"code\": 403,
                \"message\": \"No access allowed, sorry!\"
            }
        }";
    }
}