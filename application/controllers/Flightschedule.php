<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Flightschedule extends Application
{

    /**
     * Loads a list of all the flights
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
