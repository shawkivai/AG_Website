<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('welcome_model');
        $this->load->model('super_admin_model', 'sa_model');
    }

    public function index() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_slider'] = $this->welcome_model->select_all_slider_image();
        $data['all_published_notice'] = $this->welcome_model->select_all_published_notice();
        $data['all_published_news'] = $this->welcome_model->select_all_published_news();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider_image'] = $this->welcome_model->select_all_slider_image();
        $data['slider'] = 1;        
        $data['title'] ='Home';
        $data['maincontent'] = $this->load->view('home_page_content', $data, true);
        $this->load->view('master', $data);
    }

    public function dept_teacher($department_id) {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
         $data['chairman'] = $this->welcome_model->select_department_chairman($department_id);
        $data['all_teacher'] = $this->welcome_model->select_all_dept_teacher();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        
        $data['slider'] = 1;
        $data['title'] = 'Department';
        $data['maincontent'] = $this->load->view('portfolio', $data, true);
        $this->load->view('master', $data);
    }

    public function download_forms() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('forms', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Forms';
        $this->load->view('master', $data);
    }

    public function download_admission_circular() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('download_admission_circular_pdf', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Forms';
        $this->load->view('master', $data);
    }

    public function download_course_content() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_teacher_file'] = $this->welcome_model->select_all_published_teacher_file();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('course_content', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Course Content';
        $this->load->view('master', $data);
    }

    public function download_question_archive() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_question_archive'] = $this->welcome_model->select_all_published_question_archive();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('question_archive', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Question Archive';
        $this->load->view('master', $data);
    }

    public function download_result_file() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_result_file'] = $this->welcome_model->select_all_result_file();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('result_file', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Download Result';
        $this->load->view('master', $data);
    }
    public function course_materials_details($file_id) {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['course_materials_info'] = $this->welcome_model->course_materials_info_by_id($file_id);      
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('course_material_details', $data, true);
        $data['slider'] = '';
        $data['title'] = 'Course Materials';
        $this->load->view('master', $data);
    }

    public function students_file() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_student_file'] = $this->welcome_model->select_all_published_student_file();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('student_uploads', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Student File';
        $this->load->view('master', $data);
    }

    public function sportfolio() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['banner_image'] = $this->welcome_model->select_department_chairman();
        
        $data['all_teacher'] = $this->welcome_model->select_all_published_teacher();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('portfolio', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Faculty Profile';
        $this->load->view('master', $data);
    }

    public function staff() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['office_staff'] = $this->welcome_model->select_all_staff();       
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
         $data['maincontent'] = $this->load->view('staff_page', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Office Staffs';
        $this->load->view('master', $data);
    }

    public function dean_office() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();       
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['dean_staff']=$this->welcome_model->select_all_dean_staff();
        $data['slider'] = 1;
        $data['title'] = 'Office Staffs';
         $data['maincontent'] = $this->load->view('dean_office', $data, true);
        $this->load->view('master', $data);
    }
    
    
       public function emba_office() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();       
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['dean_staff']=$this->welcome_model->select_all_emba_staff();
        $data['slider'] = 1;
        $data['title'] = 'Office Staffs';
         $data['maincontent'] = $this->load->view('emba_office', $data, true);
        $this->load->view('master', $data);
    }
    
    

    public function dean_merit() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('dean_merit_list', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Dean Merit';
        $this->load->view('master', $data);
    }

    public function manage_teacher($data) {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['admin_main_content'] = $this->load->view('admin/portfolio', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $this->load->view('master', $data);
    }

    public function current_student() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('current_student_page', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Current Students';
        $this->load->view('master', $data);
    }

    public function welcome_page() {
        $data = array();
        
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();      
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Welcome Note';
          $data['maincontent'] = $this->load->view('welcome_page', $data, true);
        $this->load->view('master', $data);
    }

    public function at_a_glance() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('at_a_glance', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'At a Glance';
        $this->load->view('master', $data);
    }

    public function teacher_details($teacher_id) {
        $data = array();   
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_teacher_file'] = $this->welcome_model->select_all_published_teacher_file();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['teacher_info'] = $this->welcome_model->select_teacher_info_by_id($teacher_id);
        $data['title'] = 'Teacher Profile';
        $data['maincontent'] = $this->load->view('profile_view', $data, true);
        $this->load->view('master', $data);
    }

    public function history() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('history', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'History';
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $this->load->view('master', $data);
    }

    public function vision_and_mission() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('vision_and_mission', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Vision';
        $this->load->view('master', $data);
    }

    public function achievement() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('achievement', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Achievement';
        $this->load->view('master', $data);
    }

    public function admission_in_pstu() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('admission_in_pstu', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Admission';
        $this->load->view('master', $data);
    }

    public function pstu_at_glance() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('pstu_at_glance', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'At a Glance';
        $this->load->view('master', $data);
    }

    public function pstu_official_web_site() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('pstu_official_web_site', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'pstu_official_web_site';
        $this->load->view('master', $data);
    }

    public function residential_hall() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('residential_hall', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Residential Hall';
        $this->load->view('master', $data);
    }

    public function scholarship() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('scholarship', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Scholarship';
        $this->load->view('master', $data);
    }

    public function view_result() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('view_result', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'View Result';
        $this->load->view('master', $data);
    }

    public function bsc_in_cse() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_course'] = $this->welcome_model->select_all_published_course();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('bsc_in_cse', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Bsc in CSE';
        $this->load->view('master', $data);
    }

    
    public function bam() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_course'] = $this->welcome_model->select_all_published_course();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('bam', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Bsc in CSE';
        $this->load->view('master', $data);
    }
    
    public function alumni() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_student'] = $this->welcome_model->select_all_student();
        $data['all_batch'] = $this->welcome_model->select_all_batch();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('alumni', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Alumni';
        $this->load->view('master', $data);
    }
     public function student_details($student_id) {
        $data = array();      
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();        
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['student_info'] = $this->welcome_model->select_student_info_by_id($student_id);
        $data['title'] = 'Alumni Profile';
        $data['maincontent'] = $this->load->view('student_profile_view', $data, true);
        $this->load->view('master', $data);
    }

    public function graduate() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['maincontent'] = $this->load->view('graduate_program', $data, true);
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = 1;
        $data['title'] = 'Graduate Programs';
        $this->load->view('master', $data);
    }

    public function notice() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_notice'] = $this->welcome_model->select_all_published_notice();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('all_notice', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Notice';
        $this->load->view('master', $data);
    }

    public function dean_merit_list() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('dean_merit_list', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Dean Merit List';
        $this->load->view('master', $data);
    }

    public function image_gallery() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['gallery_category']=$this->welcome_model->select_gallery_category();
        $data['gallery_image']=$this->welcome_model->select_gallery_image();
        $data['maincontent'] = $this->load->view('image_gallery', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Image Gallery Category';

        $this->load->view('master', $data);
    }

    public function notices() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_notice'] = $this->welcome_model->select_all_published_notices();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('all_notice', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Notices';
        $this->load->view('master', $data);
    }

    public function notice_details($notice_id) {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['notice_info'] = $this->welcome_model->notice_info_by_id($notice_id);
        $data['all_published_notice'] = $this->welcome_model->select_all_published_notices();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['maincontent'] = $this->load->view('notice_details', $data, true);
        $data['slider'] = '';
        $data['title'] = 'Detailed Notice';
        $this->load->view('master', $data);
    }

    public function news() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_news'] = $this->welcome_model->select_all_published_news();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
       
        $data['slider'] = 1;
        $data['title'] = 'News and Event';
         $data['maincontent'] = $this->load->view('all_news', $data, true);
        $this->load->view('master', $data);
    }

    public function news_details($news_id) {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['news_info'] = $this->welcome_model->news_info_by_id($news_id);
        $data['all_published_news'] = $this->welcome_model->select_all_published_news();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
       
        $data['slider'] = '';
        $news='News | '.$data['news_info']->news_title;
        $data['title'] = $news;
         $data['maincontent'] = $this->load->view('news_details', $data, true);
        $this->load->view('master', $data);
    }   

    public function logoout() {
        $this->session->unset_userdata('student_name');
        $this->session->unset_userdata('$student_index');
        $sdata = array();
        $sdata['message'] = 'You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('student_login/login_page');
    }

    public function admission_info() {
        $data = array();
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['slider'] = '';
        $data['title'] = 'Admission Information';
        $data['maincontent'] = $this->load->view('admission', $data, true);
        $this->load->view('master', $data);
    }

    public function changepwd() {
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data = array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('opassword', 'Old Password', 'required|trim|xss_clean|callback_change');
        $this->form_validation->set_rules('npassword', 'New Password', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[npassword]');

        if ($this->form_validation->run() == FALSE) {

            echo validation_errors();
        }

        $this->load->view('changepassword');
    }

    public function change() { // we will load models here to check with database


        $session_data = $this->session->userdata('logged_in');
        $query = $this->db->query("select * from user where id=" . $session_data['id']);
        foreach ($query->result() as $my_info) {
            $db_password = $my_info->password;
            $db_id = $my_info->id;
        }

        if ((md5($this->input->post('opassword', $db_password)) == $db_password) && ($this->input->post('npassword') != '') && ($this->input->post('cpassword') != '')) {

            $fixed_pw = md5($this->input->post('npassword'));

            $update = $this->db->query("Update user SET password='$fixed_pw' WHERE id='$db_id'")or die(mysql_error());

            $this->form_validation->set_message('change', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Password Updated!</strong></div>');
            return false;
        } else {
            $this->form_validation->set_message('change', '<div class="alert alert-error"><a href="#" class="close" data-dismiss="alert">&times;</a>
  <strong>Wrong Old Password!</strong> </div>');

            return false;
        }
    }
      public function gallery_category_details($gallery_category_id,$gallery_category_name) {
        $data = array();   
        $data['about']=$this->welcome_model->select_about(); 
        $data['banner_image'] = $this->welcome_model->select_all_banner_image();
        $data['all_published_dept'] = $this->welcome_model->select_all_published_dept();
        $data['gallery_info'] = $this->welcome_model->select_gallery_info_by_id($gallery_category_id);
        $data['title'] = 'Gallery | '.$gallery_category_name;
        $data['maincontent'] = $this->load->view('gallery_view', $data, true);
        $this->load->view('master', $data);
    }
     
    public function report_admin()
    {
        $this->load->view('forgot_password/message');
    }
    
    public function save_message()
    {
         
        $data=array();
        $data['name']=$this->input->post('name',true);
        $data['message']=$this->input->post('message',true);
        $data['email_id']=$this->input->post('email_id',true);
        
      
        $this->welcome_model->save_message($data);
        $sdata=array();
        $sdata['message']='Your Message has been Sent';
        $this->session->set_userdata($sdata);
        
        redirect('welcome/report_admin');
    
        
    }

}


    



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */