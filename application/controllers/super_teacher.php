<?php

session_start();

class Super_Teacher extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $teacher_id = $this->session->userdata('teacher_id');
        $this->load->model('super_teacher_model', 'sa_model');
        if ($teacher_id == NULL) {
            redirect('teacher_login', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['all_teacher'] = $this->sa_model->select_teacher_by_id();
        $data['teacher_main_content'] = $this->load->view('teacher/manage_teacher_self', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function logout() {
        $this->session->unset_userdata('teacher_name');
        $this->session->unset_userdata('teacher_id');
        $this->session->unset_userdata('teacher_designation');
        $sdata = array();
        $sdata['message'] = 'You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('teacher_login');
    }

    public function manage_teacher_self() {
        $data = array();
        $data['all_teacher'] = $this->sa_model->select_teacher_by_id();
        $data['teacher_main_content'] = $this->load->view('teacher/manage_teacher_self', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function published_teacher($teacher_id) {

        $this->sa_model->update_publication_teacher_by_id($teacher_id);
        redirect('super_techer/manage_teacher');
    }

    public function unpublished_teacher($teacher_id) {

        $this->sa_model->update_unpublication_teacher_by_id($teacher_id);
        redirect('super_teacher/manage_teacher');
    }

    public function chairman($teacher_id) {

        $this->sa_model->update_chairman_by_id($teacher_id);
        redirect('super_teacher/manage_teacher');
    }

    public function unfeatured_teacher($teacher_id) {

        $this->sa_model->update_unfeatured_teacher_by_id($teacher_id);
        redirect('super_teacher/manage_teacher');
    }

    public function edit_teacher($teacher_id) {
        $data = array();
        $data['all_teacher'] = $this->sa_model->select_teacher();
        $data['teacher_info'] = $this->sa_model->select_teacher_info_by_id($teacher_id);
        $data['teacher_main_content'] = $this->load->view('teacher/edit_teacher', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function update_teacher() {

        $data = array();
        $teacher_id = $this->input->post('teacher_id');
        $data['teacher_name'] = $this->input->post('teacher_name');
        $data['teacher_designation'] = $this->input->post('teacher_designation');
        $data['teacher_about'] = $this->input->post('teacher_about');
        $data['teacher_contact_no'] = $this->input->post('teacher_contact_no');
        $data['research_area'] = $this->input->post('research_area');

        $data['teacher_email'] = $this->input->post('teacher_email', true);
        $data['teacher_education'] = $this->input->post('teacher_education', true);
        $data['teacher_publication'] = $this->input->post('teacher_publication', true);
        $data['teacher_research_details'] = $this->input->post('teacher_research_details', true);
        $data['teacher_award'] = $this->input->post('teacher_award', true);
        $data['teacher_link'] = $this->input->post('teacher_link', true);

        $on_leave = $this->input->post('on_leave', true);
        if ($on_leave == 'on') {
            $data['on_leave'] = 1;
        }

        $this->sa_model->update_teacher_by_id($data, $teacher_id);
        redirect('super_teacher/manage_teacher_self');
    }  

    public function update_image() {
        $data = array();
        $teacher_id = $this->session->userdata('teacher_id');
        $data['all_teacher'] = $this->sa_model->select_teacher();

        $data['teacher_info'] = $this->sa_model->select_teacher_info_by_id($teacher_id);
        $data['teacher_main_content'] = $this->load->view('teacher/update_image', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function update_teacher_image() {

        $data = array();
        $teacher_id = $this->input->post('teacher_id');


        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/teacher_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = '500';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('teacher_image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $config2['image_library'] = 'gd2';
            $config2['source_image'] = $config['upload_path'] . $fdata['file_name'];
            $config2['maintain_ratio'] = TRUE;          
            $config2['height'] = 400;

            $this->load->library('image_lib', $config2);
            $this->image_lib->resize();           
            $data['teacher_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * --------End Image Upload---------
         */

        $this->sa_model->update_teacher_by_id($data, $teacher_id);
        redirect('super_teacher');
    }
    
    //------------------------teacher file upload---------------------------------

    public function add_teacher_file() {
        $data = array();
        $data['teacher_main_content'] = $this->load->view('teacher/add_teacher_file', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function add_question_archive() {
        $data = array();
        $data['teacher_main_content'] = $this->load->view('teacher/add_question_archive', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function save_teacher_file() {
        $data = array();
        $data['file_name'] = $this->input->post('file_name', true);
        $data['semester'] = $this->input->post('semester', true);
        $data['course_code'] = $this->input->post('course_code', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $data['author_name'] = $this->session->userdata('teacher_name');
        $data['teacher_id'] = $this->session->userdata('teacher_id');
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'uploads/teacher_uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|ppt|pptx';
        $config['max_size'] = '10000';


        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('seleced_file')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['file_location'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * --------End Image Upload---------
         */

        $this->sa_model->save_teacher_file_info($data);
        $sdata = array();
        $sdata['message'] = 'File uploaded Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_teacher/add_teacher_file', 'refresh');
    }

    public function save_question_archive() {
        $data = array();
        $data['course_title'] = $this->input->post('course_title', true);
        $data['course_code'] = $this->input->post('course_code', true);
        $data['semester'] = $this->input->post('semester', true);
        $data['session'] = $this->input->post('session', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $data['author_name'] = $this->session->userdata('teacher_name');
        /*
         * ------- Start Image Upload---------
         */

        $config['upload_path'] = 'uploads/question_uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|ppt|pptx';
        $config['max_size'] = '10000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('selected_question')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['question_location'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * --------End Image Upload---------
         */

        $this->sa_model->save_question_archive_info($data);
        $sdata = array();
        $sdata['message'] = 'Question uploaded Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_teacher/add_question_archive', 'refresh');
    }

    //--------------------------------------blog------------------------------------
    public function add_blog() {

        $data = array();
        $data['teacher_main_content'] = $this->load->view('teacher/add_blog_form', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function save_blog() {
        $data = array();
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['blog_short_description'] = $this->input->post('blog_short_description', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $data['author_name'] = $this->session->userdata('teacher_name');
        $data['author_designation'] = $this->session->userdata('teacher_designation');
        $this->sa_model->save_blog_info($data);
        $sdata = array();
        $sdata['message'] = "Article Saved Successfully !";
        $this->session->set_userdata($sdata);
        redirect('super_teacher/add_blog');
    }

    public function view_blog() {
        $data = array();
        $data['all_published_blog'] = $this->sa_model->select_all_published_blog();
        $data['teacher_main_content'] = $this->load->view('teacher/blog', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'blog';
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function blog_details($blog_id) {
        $data = array();
        $data['blog_info'] = $this->sa_model->blog_info_by_id($blog_id);
        $data['blog_comments'] = $this->sa_model->select_comments_by_blog_id($blog_id);
        $data['teacher_main_content'] = $this->load->view('teacher/blog_details', $data, true);
        $data['slider'] = '';
        $data['title'] = 'blog details';
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function save_comments() {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id');
        $data['comments_author_name'] = $this->session->userdata('teacher_name');
        $data['comments_author_email'] = $this->session->userdata('teacher_designation');
        $data['comments'] = $this->input->post('comments');
        $this->sa_model->save_blog_comments($data);
        $sdata = array();
        $this->session->set_userdata($sdata);
        redirect('super_teacher/blog_details/' . $this->input->post('blog_id'));
    }

    public function change_password() {
        $data = array();
        $data['teacher_main_content'] = $this->load->view('teacher/change_pass', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function check_password() {
        $teacher_id = $this->session->userdata('teacher_id');       
        $teacher_old_password = $this->input->post('teacher_old_password', true);
        $teacher_new_password = $this->input->post('teacher_new_password', true);
        $result = $this->sa_model->check_password_login_info($teacher_old_password, $teacher_id);
        $sdata = array();

        if ($result) {
            $this->db->set('teacher_password', md5($teacher_new_password));
            $this->db->where('teacher_id', $teacher_id);
            $this->db->update('tbl_teacher');
            $sdata['message'] = 'Your User Password Updated !';
            $this->session->set_userdata($sdata);


            redirect('super_teacher');
            
        } else {
            $sdata['message'] = 'Please Enter Valid Old Password !';
            $this->session->set_userdata($sdata);
            redirect('super_teacher/change_password');
        }
    }

    public function manage_teacher_files() {
        $data = array();
        $data['all_teacher_files'] = $this->sa_model->select_all_teacher_file_by_id();
        $data['teacher_main_content'] = $this->load->view('teacher/manage_teacher_file', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function delete_teacher_file($file_id) {

        $this->sa_model->delete_teacher_file_by_id($file_id);
        redirect('super_teacher/manage_teacher_files');
    }

    //   --------------------------------- Blog----------------------------------------


    public function manage_blog() {
        $data = array();

        $data['all_blog'] = $this->sa_model->select_all_blog_by_id();
        $data['teacher_main_content'] = $this->load->view('teacher/manage_blog', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function edit_blog($blog_id) {
        $data = array();

        $data['blog_info'] = $this->sa_model->select_blog_info_by_id($blog_id);
        $data['teacher_main_content'] = $this->load->view('teacher/edit_blog', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function update_blog() {

        $data = array();
        $blog_id = $this->input->post('blog_id', true);
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['blog_short_description'] = $this->input->post('blog_short_description', true);
        $data['blog_description'] = $this->input->post('blog_description', true);

        $this->sa_model->update_blog_by_id($data, $blog_id);
        redirect('super_teacher/manage_blog');
    }

    public function delete_blog($blog_id) {
        $this->sa_model->delete_blog_by_id($blog_id);
        redirect('super_teacher/manage_blog');
    }

    public function security_question() {
        $data = array();
        $teacher_id = $this->session->userdata('teacher_id');
        $data['teacher_info'] = $this->sa_model->select_teacher_info_by_id($teacher_id);
        $data['teacher_main_content'] = $this->load->view('teacher/add_security_question', $data, true);
        $data['slider'] = '';
        $data['title'] = 'Security Question';
        $this->load->view('teacher/teacher_master_page', $data);
    }

    public function update_security_question() {
        $data = array();
        $teacher_id = $this->session->userdata('teacher_id');
        $data['security_question'] = $this->input->post('security_question');
        $data['answer'] = $this->input->post('answer');
        $this->sa_model->update_security_question($data, $teacher_id);
        $sdata = array();
        $sdata['message'] = 'Your Security Question Updated !';
        $this->session->set_userdata($sdata);
        redirect('super_teacher');
    }
    
    
    public function course_reg(){
               $data = array();
       // $data['all_teacher'] = $this->sa_model->select_teacher_by_id();
        $data['teacher_main_content'] = $this->load->view('teacher/course_reg', $data, true);
        $this->load->view('teacher/teacher_master_page', $data);
        
        
    }
    
    public function save_course_reg(){
        
         $data = array();
        $teacher_id = $this->input->post('teacher_id');
        $data['teacher_name'] = $this->input->post('teacher_name');
        $data['teacher_designation'] = $this->input->post('teacher_designation');
        $data['teacher_about'] = $this->input->post('teacher_about');
        $data['teacher_contact_no'] = $this->input->post('teacher_contact_no');
        $data['research_area'] = $this->input->post('research_area');

        $data['teacher_email'] = $this->input->post('teacher_email', true);
        $data['teacher_education'] = $this->input->post('teacher_education', true);
        $data['teacher_publication'] = $this->input->post('teacher_publication', true);
        $data['teacher_research_details'] = $this->input->post('teacher_research_details', true);
        $data['teacher_award'] = $this->input->post('teacher_award', true);
        $data['teacher_link'] = $this->input->post('teacher_link', true);

        $on_leave = $this->input->post('on_leave', true);
        if ($on_leave == 'on') {
            $data['on_leave'] = 1;
        }

        $this->sa_model->update_teacher_by_id($data, $teacher_id);
        redirect('super_teacher/manage_teacher_self');
        
        
    }
    

    
    
    
    

}
