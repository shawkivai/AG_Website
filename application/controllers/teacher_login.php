<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Teacher_login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $teacher_id=$this->session->userdata('teacher_id');
        
        if($teacher_id !=NULL)
        {
            redirect('super_teacher','refresh');
        }
    }
    
    public function index()
    {
        $this->load->view('teacher/teacher_login_page');
    }
    public function check_teacher_login()
    {
        $teacher_email=$this->input->post('teacher_email',true);
        $teacher_password=$this->input->post('teacher_password',true);
        $this->load->model('teacher_model','a_model');
       $result= $this->a_model->check_teacher_login_info($teacher_email,$teacher_password);
    //echo '<pre>';
     // print_r($result);
     //  exit();
       $sdata=array();
       
       if($result)
       {
           
           $sdata['teacher_id']=$result->teacher_id;
           $sdata['teacher_name']=$result->teacher_name;
           $sdata['teacher_designation']=$result->teacher_designation;
           $sdata['level_id']=$result->access_level;
           $this->session->set_userdata($sdata);
           //$sdata[]
           redirect('super_teacher');
       }
       else{
           $sdata['message']='Your Email / Password Invalid !';
           $this->session->set_userdata($sdata);
           $this->load->view('teacher/teacher_login_page');
       }
    }
    
}






