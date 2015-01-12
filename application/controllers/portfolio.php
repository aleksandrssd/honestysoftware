<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Portfolio extends CI_Controller {
    
    public function project1(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project1', $data);
        $this->load->view('footer', $data);
    }
}
