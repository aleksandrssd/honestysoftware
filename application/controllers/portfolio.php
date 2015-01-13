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
    
     public function project2(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project2', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project3(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project3', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project4(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project4', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project5(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project5', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project6(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project6', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project7(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project7', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project8(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project8', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project9(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project9', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project10(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project10', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project11(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project11', $data); 
        $this->load->view('footer', $data);
    }
    
     public function project12(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['title'] = "Completed projects";
        $this->load->view('header', $data);
        $this->load->view('portfolio/project12', $data); 
        $this->load->view('footer', $data);
    }
}
