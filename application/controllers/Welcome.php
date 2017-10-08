<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Loads homepage with some info about the airline.
	 */
	public function index()
	{
        $this->load->model('airplanes');
        $this->load->model('airports');
        $this->load->model('flights');
        $this->data['airplanes'] = $this->airplanes->all();
        $this->data['airports'] = $this->airports->all();
        $this->data['flights'] = $this->flights->all();
        $this->data['flightcount'] = $this->flights->count;
        $this->data['airportcount'] = count($this->airports->all());
        $this->data['pagetitle'] = 'Home';
        $this->data['pagebody'] = 'dashboard';
		$this->data['pagefooter'] = 'layout/footer';
		$this->data['pageheader'] = 'layout/header';
		$this->render();
	}

}
