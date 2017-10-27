<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Student_login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $student_id=$this->session->userdata('student_id');
        
        if($student_id !=NULL)
        {
            redirect('super_student','refresh');
        }
    }
    
    public function index()
    {
        $this->load->view('student/student_login_page');
    }
    
    
    public function student_reg(){
        
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_slider'] = $this->welcome_model->select_all_slider_image();
        $data['all_published_notice'] = $this->welcome_model->select_all_published_notice();
        $data['all_published_news'] = $this->welcome_model->select_all_published_news();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
       
        $data['slider'] = 1;        
        $data['title'] ='Home';
        $data['maincontent'] = $this->load->view('student_signup', $data, true);
        $this->load->view('master', $data);
    }

    public function check_student_login()
    {
        $student_reg_no=$this->input->post('student_reg_no',true);
        $student_password=$this->input->post('student_password',true);
        $this->load->model('student_model','a_model');
       $result= $this->a_model->check_student_login_info($student_reg_no,$student_password);   
       $sdata=array();
       
       if($result)
       {           
           $sdata['student_id']=$result->student_id;
           $sdata['student_name']=$result->student_name;
           $sdata['student_batch']=$result->student_batch;           
           $this->session->set_userdata($sdata);           
           redirect('super_student');
       }
       else{
           $sdata['message']='Your Registration No. / Password Invalid !';
           $this->session->set_userdata($sdata);
           $this->load->view('student/student_login_page');
       }
    }
    
}






