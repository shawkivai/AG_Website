<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Forgot_password extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $teacher_email=$this->session->userdata('teacher_email');
       
        $this->load->model('teacher_model','a_model');
       
    }
    
    public function index()
    {
        $this->load->view('forgot_password/get_email');
    }
    public function check_teacher_email()
    {
        $teacher_email=$this->input->post('teacher_email',true);
        
        
       $result= $this->a_model->check_teacher_email_info($teacher_email);
    //echo '<pre>';
     // print_r($result);
     //  exit();
       $sdata=array();
       
       if($result)
       {
           
           $sdata['teacher_email']=$result->teacher_email;
           $sdata['teacher_id']=$result->teacher_id;
           $sdata['teacher_name']=$result->teacher_name;
           $sdata['teacher_designation']=$result->teacher_designation;
           $sdata['security_question']=$result->security_question;
           $sdata['answer']=$result->answer;
           $sdata['level_id']=$result->access_level;
           $this->session->set_userdata($sdata);
           //$sdata[]
           redirect('forgot_password/get_question');
       }
       else{
           $sdata['message']='Your Email not Found  !';
           $this->session->set_userdata($sdata);
           $this->load->view('forgot_password/get_email');
       }
    }
    public function get_question()
    {   $data=array();
        $teacher_email=$this->session->userdata('teacher_email');
       
        $data['teacher_info']=$this->a_model->check_teacher_email_info($teacher_email);
         $this->load->view('forgot_password/report');
        
    }
    
    public function check_security_question()
    {
       
        $teacher_email=$this->session->userdata('teacher_email');
        $security_question=$this->session->userdata('security_question',true);
        $answer=$this->input->post('answer',true);
         if($answer !=NULL)
        {
          $this->load->model('teacher_model','a_model');
       $result= $this->a_model->check_teacher_question_info($teacher_email,$security_question,$answer);
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
           redirect('forgot_password/reset_password');
       }
       else{
           $sdata['message']='Your Answer is NOT Correct !';
           $this->session->set_userdata($sdata);
           $this->load->view('forgot_password/report');
            }
        }
        else{
           $sdata['message']='Please provide a answer or report to admin!';
           $this->session->set_userdata($sdata);
           $this->load->view('forgot_password/report');
            }
        
        
        
        
    }
    
    public function report_admin()
    {
        $this->load->view('forgot_password/message');
    }
    
    public function reset_password()
    {
        $this->load->view('forgot_password/reset_password');
        
    }
    public function change_password()
    {
          $teacher_email=$this->session->userdata('teacher_email');
          $password=$this->input->post('password');
           $this->db->set('teacher_password',md5($password));
        $this->db->where('teacher_email', $teacher_email);
        $this->db->update('tbl_teacher');
        $sdata['message']='Your User Password Changed !';
        $this->session->set_userdata($sdata);
        
        
        redirect('teacher_login');
        
        
    }
    
}






