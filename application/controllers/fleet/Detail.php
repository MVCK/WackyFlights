<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends Application
{
    /**
     * Loads the details for a particular airplane
     */
    public function index($id)
    {
        $this->load->model('airplanes');
        $source = $this->airplanes->get($id);
        $this->data['pagetitle'] = 'Fleet Detail';
        $this->data['pagefooter'] = 'layout/footer';
        $this->data['pageheader'] = 'layout/header';
        if($source)
        {
            $this->data = array_merge($this->data, (array)$source);
            $this->data['pagebody'] = 'fleetdetail';
        }
        else
        {
            $this->data['pagebody'] = 'error';
        }
        $this->render();
    }
}
