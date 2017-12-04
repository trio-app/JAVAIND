<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{
    
    /* function __construct() {
        parent::__construct();
        $this->load->helper('app_helper');
        if(empty($this->session->userdata('isLogin')) && ($this->session->userdata('app_id') != app_id())){
            redirect('Login');
        }
    } */
    
    public function index(){
        $data['base_url'] = base_url();
        
        $data['header'] = $this->load->view('Home/tamplate/V_header', $data, TRUE);
        $data['footer'] = $this->load->view('Home/tamplate/V_footer', $data, TRUE);
        
        $this->load->view('V_home', $data);
    }
    
    
}

