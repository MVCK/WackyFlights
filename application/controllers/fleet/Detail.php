<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends Application
{
    /**
     * Fleet Page for this controller.
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
    public function index($id)
    {
        $this->load->model('airplanes');
        $source = $this->airplanes->get($id);
        $this->data = array_merge($this->data, (array) $source);
        $this->data['pagetitle'] = 'Fleet Detail';
        $this->data['pagebody'] = 'fleetdetail';
        $this->data['pagefooter'] = 'layout/footer';
        $this->data['pageheader'] = 'layout/header';
        $this->render();
    }
}
