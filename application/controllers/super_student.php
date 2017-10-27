<?php

session_start();

class Super_Student extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $student_id = $this->session->userdata('student_id');
        $student_name = $this->session->userdata('student_name');
        $student_batch = $this->session->userdata('student_batch');
        if ($student_id == NULL) {
            redirect('student_login', 'refresh');
        }
        $this->load->model('super_student_model', 'sa_model');
    }

    public function index() {
        $data = array();
        $data['all_student'] = $this->sa_model->select_student_by_id();
        $data['student_main_content'] = $this->load->view('student/manage_student_self', $data, true);
        $this->load->view('student/student_master_page', $data);
    }

    public function logout() {
        $this->session->unset_userdata('student_name');
        $this->session->unset_userdata('student_id');
        $sdata = array();
        $sdata['message'] = 'You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('student_login');
    }

    public function manage_student_self() {
        $data = array();
        $data['all_student'] = $this->sa_model->select_student_by_id();
        $data['student_main_content'] = $this->load->view('student/manage_student_self', $data, true);
        $this->load->view('student/student_master_page', $data);
    }
    
    
       public function student_enrollment() {
        $data = array();
        $data['all_student'] = $this->sa_model->select_student_by_id();
        $data['student_main_content'] = $this->load->view('student/student_enrollment', $data, true);
        $this->load->view('student/student_master_page', $data);
    }
    
    

    public function published_student($student_id) {

        $this->sa_model->update_publication_student_by_id($student_id);
        redirect('super_student/manage_student');
    }

    public function unpublished_student($student_id) {

        $this->sa_model->update_unpublication_student_by_id($student_id);
        redirect('super_student/manage_student');
    }

    public function edit_student($student_id) {
        $data = array();
        $data['all_student'] = $this->sa_model->select_student();
        $data['all_published_batch'] = $this->sa_model->select_all_published_batch();
        $data['student_info'] = $this->sa_model->select_student_info_by_id($student_id);
        $data['student_main_content'] = $this->load->view('student/edit_student', $data, true);
        $this->load->view('student/student_master_page', $data);
    }

    public function update_student() {

        $data = array();
        $student_id = $this->input->post('student_id');

        $data['student_address'] = $this->input->post('student_address', true);
        $data['student_batch'] = $this->input->post('student_batch', true);
        $data['student_expert_area'] = $this->input->post('student_expert_area', true);
        $data['student_job_location'] = $this->input->post('student_job_location', true);
        $data['student_hall'] = $this->input->post('student_hall', true);
        $data['student_father_name'] = $this->input->post('student_father_name', true);
        $data['student_mother_name'] = $this->input->post('student_mother_name', true);
        $data['guardian_contact_no'] = $this->input->post('guardian_contact_no', true);
        $data['student_contact_no'] = $this->input->post('student_contact_no', true);
        $data['student_email'] = $this->input->post('student_email', true);
        $data['student_batch'] = $this->input->post('student_batch', true);
        $data['student_blood_group'] = $this->input->post('student_blood_group', true);
        $data['student_gender'] = $this->input->post('student_gender', true);
        $data['student_designation'] = $this->input->post('student_designation', true);


        $this->sa_model->update_student_by_id($data, $student_id);
        redirect('super_student/manage_student_self');
    }

    public function update_image() {
        $data = array();
        $student_id = $this->session->userdata('student_id');
        $data['all_student'] = $this->sa_model->select_student();

        $data['student_info'] = $this->sa_model->select_student_info_by_id($student_id);
        $data['student_main_content'] = $this->load->view('student/update_image', $data, true);
        $this->load->view('student/student_master_page', $data);
    }

    public function update_student_image() {

        $data = array();
        $student_id = $this->input->post('student_id');


        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/student_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = '500';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('student_image')) {
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
            $data['student_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /*
         * --------End Image Upload---------
         */

        $this->sa_model->update_student_by_id($data, $student_id);
        redirect('super_student');
    }

    


    //---------------------------------blog----------------------------------
    public function add_blog() {

        $data = array();
        $data['student_main_content'] = $this->load->view('student/add_blog_form', $data, true);
        $this->load->view('student/student_master_page', $data);
    }

    public function save_blog() {
        $data = array();
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['blog_short_description'] = $this->input->post('blog_short_description', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $data['author_name'] = $this->session->userdata('student_name');
        $data['author_designation'] = $this->session->userdata('student_batch');
        $this->sa_model->save_blog_info($data);
        $sdata = array();
        $sdata['message'] = "Article Saved Successfully !";
        $this->session->set_userdata($sdata);
        redirect('super_student/add_blog');
    }

    public function view_blog() {
        $data = array();
        $data['all_published_blog'] = $this->sa_model->select_all_published_blog();
        $data['student_main_content'] = $this->load->view('student/blog', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'blog';
        $this->load->view('student/student_master_page', $data);
    }

    public function blog_details($blog_id) {
        $data = array();

        $data['blog_info'] = $this->sa_model->blog_info_by_id($blog_id);
        $data['blog_comments'] = $this->sa_model->select_comments_by_blog_id($blog_id);
        $data['student_main_content'] = $this->load->view('student/blog_details', $data, true);
        $data['slider'] = '';
        $data['title'] = 'blog details';
        $this->load->view('student/student_master_page', $data);
    }

    public function save_comments() {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id');
        $data['comments_author_name'] = $this->session->userdata('student_name');
        $data['comments_author_email'] = $this->session->userdata('student_batch');
        $data['comments'] = $this->input->post('comments');
        $this->sa_model->save_blog_comments($data);
        $sdata = array();       
        $this->session->set_userdata($sdata);
        redirect('super_student/blog_details/' . $this->input->post('blog_id'));
    }

    public function change_password() {
        $this->load->view('student/change_pass');
    }

    public function check_password() {
        $student_id = $this->session->userdata('student_id');        
        $student_old_password = $this->input->post('student_old_password', true);
        $student_new_password = $this->input->post('student_new_password', true);      
        $result = $this->sa_model->check_password_login_info($student_old_password, $student_id);

        $sdata = array();

        if ($result) {
            $this->db->set('student_password', md5($student_new_password));
            $this->db->where('student_id', $student_id);
            $this->db->update('tbl_student');
            $sdata['message'] = 'Your User Password Updated !';
            $this->session->set_userdata($sdata);
            redirect('super_student');           
        } else {
            $sdata['message'] = 'Please Enter Valid Old Password !';
            $this->session->set_userdata($sdata);
            redirect('super_student/change_password');
        }
    }

}
