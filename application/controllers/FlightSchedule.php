<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FlightSchedule extends Application
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('flights');
        $this->data['flights'] = $this->flights->all();
        $this->data['pagetitle'] = 'Flight Schedule';
        $this->data['pagebody'] = 'flightschedule';
        $this->data['pagefooter'] = 'layout/footer';
        $this->data['pageheader'] = 'layout/header';
        $this->render();
    }

}
