<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends Application
{
    /**
     * Loads the details for a particular airplane
     */
    public function index($id)
    {
        $this->data["editButton"] = $this->parser->parse('emptydiv', [], true);
        if($this->session->userdata('userrole') == "Owner"){
            $this->data["editButton"] .= $this->parser->parse("editButton", [], true);
        }
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
    public function submit() {
        $form_data = $this->input->post();
        $this->load->model('airplanes');
        $source = $this->airplanes->get($form_data['id']);
        
        
        foreach($form_data as $key => $value){
            
            $source[$key] = $value;
        }
        // $tmp = 'Location: '. APPPATH . "./fleet/detail/" . $form_data['id'];
        redirect('/fleet', 'refresh');
        

    }
}
