<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends Application
{
    /**
     * Loads the details for a particular airplane
     */
    public function index()
    {
        
        $this->data['pagetitle'] = 'Add Plane';
        $this->data['pagefooter'] = 'layout/footer';
        $this->data['pageheader'] = 'layout/header';
        $this->data['pagebody'] = 'addToFleet';
    
        $this->render();
    }
    public function submit() {
        //new airplane created
        $form_data = $this->input->post();
        foreach($form_data as $key => $value){
            
            //$source[$key] = $value;
        }
        // $tmp = 'Location: '. APPPATH . "./fleet/detail/" . $form_data['id'];
        redirect('/fleet', 'refresh');
        

    }
}
