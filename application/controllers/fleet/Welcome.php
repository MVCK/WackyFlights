<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

    /**
     * Loads the fleet of airplanes for the airline
     */
    public function index()
    {

        $this->load->model('airplanes');
        $rows = array();
        $params = array('airplanes'=> $rows);//array of arrays
        $this->data['airplanes'] = $this->airplanes->all();
        $this->data['pagetitle'] = 'Fleet';
        $this->data['pagebody'] = 'fleet';
        $this->data['pagefooter'] = 'layout/footer';
        $this->data['pageheader'] = 'layout/header';
        $this->render();
    }

}
