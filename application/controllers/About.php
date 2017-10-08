<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

    /**
     * Loads some info about the app
     */
    public function index()
    {
        $this->data['pagetitle'] = 'About Us';
        $this->data['pagebody'] = 'about';
        $this->data['pagefooter'] = 'layout/footer';
        $this->data['pageheader'] = 'layout/header';
        $this->render();
    }

}
