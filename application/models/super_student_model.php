<?php

class Super_Student_Model extends CI_Model {
        
    
    //----------------------------------------session------------------------
    
    
    //----------------------------------student-----------------
    public function save_student_info($data)
    {
         $this->db->insert('tbl_student', $data);
    }
    public function select_student_by_id(){
        $access_level = $this->session->userdata('access_level');
        $student_id = $this->session->userdata('student_id');
         $student_name = $this->session->userdata('student_name');
        if($access_level == 1){
            $condition = '';
        }else{
            $condition = "WHERE student_id =$student_id";
        }
         $sql="SELECT 
            * 
            FROM 
            `tbl_student` 
            LEFT JOIN tbl_session ON tbl_student.session_id = tbl_session.session_id
            $condition";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
    
    
    public function update_publication_student_by_id($data,$student_id){
        $this->db->set('publication_status', 1);
        $this->db->where('student_id', $student_id);
        $this->db->update('tbl_student',$data);
    }
    
    public function update_unpublication_student_by_id($data,$student_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('student_id',$student_id);
        $this->db->update('tbl_student',$data);
    }
    
  
    public function update_unfeatured_student_by_id($data,$student_id) {

        $this->db->set('chairman', 0);
        $this->db->where('student_id', $student_id);
        $this->db->update('tbl_student',$data);
    }
    
    public function select_student_info_by_id($student_id) {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('student_id', $student_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
     public function delete_image_by_id($student_id){
         $sql="SELECT * FROM tbl_student WHERE student_id='$student_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        unlink("$result->student_image");
        $this->db->set('student_image', '');
        $this->db->where('student_id', $student_id);
        $this->db->update('tbl_student');
        
        return $result;
       }
    
    public function update_student_by_id($data, $student_id) {
        $this->db->where('student_id', $student_id);
        $this->db->update('tbl_student', $data);
        
       //  $this->db->set('publication_status', 1);
        //$this->db->where('teacher_id', $teacher_id);
       // $this->db->update('tbl_teacher',$data);
    }
    
    public function delete_student_by_id($student_id){
        
        $this->db->where('student_id', $student_id);
        $this->db->delete('tbl_student');
    }


    public function delete_student_image_by_id($student_id){
         $sql="SELECT * FROM tbl_student WHERE student_id='$student_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->student_image");
        
        
        $this->db->set('student_image', '');
        $this->db->where('student_id', $student_id);
        $this->db->update('tbl_student');
        
        return $result;
       }
            public function select_student()
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
      
    
    //-----------------------------student file upload------------------
     public function save_student_file_info($data)
    {
         $this->db->insert('tbl_student_file', $data);
    }
    
     public function select_all_student_file() {
        $this->db->select('*');
        $this->db->from('tbl_student_file');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

     public function select_student_file_info_by_id($file_id) {
        $this->db->select('*');
        $this->db->from('tbl_student_file');
        $this->db->where('file_id', $file_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }      
    
    public function select_all_published_student_file()
    {
        $this->db->select('*');
        $this->db->from('tbl_student_file');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_all_published_batch()
    {
        $this->db->select('*');
        $this->db->from('tbl_batch');
       
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    //------------------------------notice-----------------------------
    public function select_all_published_notice() {
         $this->db->select('*');
        $this->db->from('tbl_teacher_notice');
        $this->db->where('publication_status', 1);
        $this->db->order_by('notice_id','desc');
        
        $query_result = $this->db->get();
        $result = $query_result->result();
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

    //----------------------------------blog-----------------------------------
    
     public function save_blog_info($data)
     {
         $this->db->insert('tbl_blog',$data);
     }
     
      public function select_all_published_blog()
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);
        $this->db->order_by('blog_id','desc');
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    
    public function blog_info_by_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
    public function save_blog_comments($data)
    {
        $this->db->insert('tbl_comments',$data);
    }
    public function select_comments_by_blog_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('blog_id',$blog_id);
        $this->db->where('publication_status',1);
        
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
      public function check_password_login_info($student_old_password,$student_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('student_id',$student_id);
        $this->db->where('student_password',md5($student_old_password));
//        $password=md5($student_password);
//        $sql="SELECT * FROM tbl_student WHERE student_email_address='$student_email_address' AND student_password='$password'";
//        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
