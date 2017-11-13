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
        if(!$source) {
            $source = $this->airplanes->find($id);
        }
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
        if(!isset($this->data['error'])) {
            $this->data['error'] = $this->parser->parse("emptydiv", [], true);
        }
        $this->render();
    }

    /**
     * Edits the details of a plane
     */
    public function submit() {

        $form_data = $this->input->post();
        $this->load->model('airplanes');
        $this->load->model('plane');

        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->airplanes->rules());

        $plane = array();
        $plane = array_merge($plane, $form_data);
        $plane = (object) $plane;  // convert back to object
        if($this->form_validation->run()) {
            if (empty($plane->id)) {
                $plane->id = $this->airplanes->highest() + 1;
                $this->airplanes->add($plane);
            } else {
                $this->airplanes->update($plane);
            }
        }
        if(validation_errors()) {
            $this->data['error'] = validation_errors();
        }
        if(isset($plane->id)) {
            $this->index($plane->id);

        } else {
            redirect('/fleet', 'refresh');
        }
        // $tmp = 'Location: '. APPPATH . "./fleet/detail/" . $form_data['id'];
    }
}
