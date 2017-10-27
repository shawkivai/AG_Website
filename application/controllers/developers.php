<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Developers extends CI_Controller {

    public function __construct() {
        parent::__construct();

//        $this->load->model('welcome_model');
       $this->load->model('super_admin_model', 'sa_model');
//        
    }

    public function index() {
    
 $data = array();
         $data['banner_image']=$this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('developer', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Developer';
        $this->load->view('master', $data);
}


    }