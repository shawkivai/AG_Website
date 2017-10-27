<?php

class Welcome_Model extends CI_Model {

    //put your code here
    public function select_all_published_semester() {
        $this->db->select('*');
        $this->db->from('tbl_semester');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_dept() {
        $this->db->select('*');
        $this->db->from('tbl_department');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_department_chairman($department_id){
        $this->db->select('*');
        $this->db->from('tbl_department');
       $this->db->where('department_id', $department_id);
    
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    

    public function select_all_dept_teacher() {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('publication_status', 1);
       // $this->db->where('department_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function course_materials_info_by_id($file_id) {
        $this->db->select('*');
        $this->db->from('tbl_teacher_file');
        $this->db->where('file_id', $file_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_all_published_teacher() {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_notice() {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $this->db->where('publication_status', 1);
        $this->db->order_by('notice_id', 'desc');
        $this->db->limit(5);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_course() {
        $this->db->select('*');
        $this->db->from('tbl_course');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_student() {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_batch() {
        $this->db->select('*');
        $this->db->from('tbl_batch');
        $this->db->where('pass_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_student_info_by_id($student_id) {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('student_id', $student_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_all_banner_image() {
        $this->db->select('*');
        $this->db->from('tbl_banner_image');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_image() {
        $this->db->select('*');
        $this->db->from('tbl_admin_file');
        $this->db->where('publication_status', 1);
        $this->db->order_by('file_id', 'desc');
        $this->db->limit(5);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_notices() {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $this->db->where('publication_status', 1);
        $this->db->order_by('notice_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status', 1);
        $this->db->order_by('news_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_teacher_file() {
        $this->db->select('*');
        $this->db->from('tbl_teacher_file');
        $this->db->where('publication_status', 1);
        $this->db->order_by('file_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_question_archive() {
        $this->db->select('*');
        $this->db->from('tbl_question');
        $this->db->where('publication_status', 1);
        $this->db->order_by('question_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_result_file() {
        $this->db->select('*');
        $this->db->from('tbl_result_file');
        $this->db->order_by('result_file_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_student_file() {
        $this->db->select('*');
        $this->db->from('tbl_student_file');
        $this->db->where('publication_status', 1);
        $this->db->order_by('file_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_user_info($data) {
        $this->db->insert('tbl_user', $data);
    }

    public function check_user_login_info($email_address, $password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_address', $email_address);
        $this->db->where('password', md5($password));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_teacher_info_by_id($teacher_id) {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('teacher_id', $teacher_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function notice_info_by_id($notice_id) {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $this->db->where('notice_id', $notice_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function news_info_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_all_slider_image() {
        $this->db->select('*');
        $this->db->from('tbl_slider_image');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_gallery_category() {
        $this->db->select('*');
        $this->db->from('tbl_gallery_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_gallery_image() {
        $this->db->select('*');
        $this->db->from('tbl_gallery_image');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_gallery_info_by_id($gallery_category_id) {
        $this->db->select('*');
        $this->db->from('tbl_gallery_image');
        $this->db->where('category_id', $gallery_category_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_message($data) {
        $this->db->insert('tbl_message', $data);
    }
    
    public function select_about()
    {
        $this->db->select('*');
        $this->db->from('tbl_about');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;        
    }
   
    public function select_all_dean_staff()
    {
        $this->db->select('*');
        $this->db->from('tbl_dean_office');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;        
    }
    
      public function select_all_emba_staff()
    {
        $this->db->select('*');
        $this->db->from('tbl_emba_office');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;        
    }
    
    
    public function select_all_staff()
    {
        $this->db->select('*');
        $this->db->from('tbl_staff');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;        
    }

}
