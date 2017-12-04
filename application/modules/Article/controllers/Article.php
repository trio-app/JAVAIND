<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articlekonteks extends MX_Controller{
    
    /* function __construct() {
        parent::__construct();
        $this->load->helper('app_helper');
        if(empty($this->session->userdata('isLogin')) && ($this->session->userdata('app_id') != app_id())){
            redirect('Login');
        }
    } */
    
    public function konteksorganisasi(){
        $data['base_url'] = base_url();
        
        $data['header'] = $this->load->view('Home/tamplate/V_header', $data, TRUE);
        $data['footer'] = $this->load->view('Home/tamplate/V_footer', $data, TRUE);
        
        $this->load->view('V_konteksorganisasi', $data);
    }
    
    public function mariberiso(){
        $data['base_url'] = base_url();
        
        $data['header'] = $this->load->view('Home/tamplate/V_header', $data, TRUE);
        $data['footer'] = $this->load->view('Home/tamplate/V_footer', $data, TRUE);
        
        $this->load->view('V_mariberiso', $data);
    }
    
    public function perencanaan(){
        $data['base_url'] = base_url();
        
        $data['header'] = $this->load->view('Home/tamplate/V_header', $data, TRUE);
        $data['footer'] = $this->load->view('Home/tamplate/V_footer', $data, TRUE);
        
        $this->load->view('V_perencanaan', $data);
    }
    
    public function kepemimpinan(){
        $data['base_url'] = base_url();
        
        $data['header'] = $this->load->view('Home/tamplate/V_header', $data, TRUE);
        $data['footer'] = $this->load->view('Home/tamplate/V_footer', $data, TRUE);
        
        $this->load->view('V_kepemimpinan', $data);
    }
    
    public function iso(){
        $data['base_url'] = base_url();
        
        $data['header'] = $this->load->view('Home/tamplate/V_header', $data, TRUE);
        $data['footer'] = $this->load->view('Home/tamplate/V_footer', $data, TRUE);
        
        $this->load->view('V_iso', $data);
    }
}

