<?php

class Super_Teacher_Model extends CI_Model {
        
    
    //----------------------------------------session------------------------
    
    
    //-----------------------------------teacher------------------
    public function save_teacher_info($data)
    {
         $this->db->insert('tbl_teacher', $data);
    }
    public function select_teacher_by_id(){
        $access_level = $this->session->userdata('access_level');
        $teacher_id = $this->session->userdata('teacher_id');
         $teacher_name = $this->session->userdata('teacher_name');
        if($access_level == 1){
            $condition = '';
        }else{
            $condition = "WHERE teacher_id =$teacher_id";
        }
         $sql="SELECT 
            * 
            FROM 
            `tbl_teacher` 
            LEFT JOIN tbl_department ON tbl_teacher.department_id = tbl_department.department_id
            $condition";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
    
      public function select_teacher_file_by_id($teacher_id) {
        $this->db->select('*');
        $this->db->from('tbl_teacher_file');
        $this->db->where('teacher_id', $teacher_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }  
    
    
    public function update_publication_teacher_by_id($data,$teacher_id){
        $this->db->set('publication_status', 1);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher',$data);
    }
    
    public function update_unpublication_teacher_by_id($data,$teacher_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher',$data);
    }
    
    public function update_chairman_by_id($data,$teacher_id){
        $this->db->set('chairman', 1);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher',$data);
    }
    
    public function update_unfeatured_teacher_by_id($data,$teacher_id) {

        $this->db->set('chairman', 0);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher',$data);
    }
    public function select_teacher_info_by_id($teacher_id) {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('teacher_id', $teacher_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    public function update_teacher_by_id($data, $teacher_id) {
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher', $data);
    }
    
    public function delete_teacher_by_id($teacher_id){
        
        $this->db->where('teacher_id', $teacher_id);
        $this->db->delete('tbl_teacher');
    }


    public function delete_image_by_id($teacher_id){
         $sql="SELECT * FROM tbl_teacher WHERE teacher_id='$teacher_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->teacher_image");
        
        
        $this->db->set('teacher_image', '');
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher');
        
        return $result;
       }
            public function select_teacher()
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
      
     //-----------------------------notice-------------------------  
        public function save_notice_info($data){
         $this->db->insert('tbl_teacher_notice', $data);
    }
    
    public function select_all_notice() {
        $this->db->select('*');
        $this->db->from('tbl_teacher_notice');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function update_publication_notice_by_id($notice_id) {

        $this->db->set('publication_status', 1);
        $this->db->where('notice_id', $notice_id);
        $this->db->update('tbl_teacher_notice');
    }

    public function update_unpublication_notice_by_id($notice_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('notice_id', $notice_id);
        $this->db->update('tbl_teacher_notice');
    }

    public function delete_notice_by_id($notice_id) {
        $this->db->where('notice_id', $notice_id);
        $this->db->delete('tbl_teacher_notice');
    }

    public function update_notice_info($data, $notice_id) {
        $this->db->where('notice_id', $notice_id);
        $this->db->update('tbl_teacher_notice', $data);
    }

    public function select_notice_info_by_id($notice_id) {
        $this->db->select('*');
        $this->db->from('tbl_teacher_notice');
        $this->db->where('notice_id', $notice_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }      
    
    public function select_all_published_notice()
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher_notice');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    //-----------------------------teacher file upload------------------
     public function save_teacher_file_info($data)
    {
         $this->db->insert('tbl_teacher_file', $data);
    }
	
     public function save_question_archive_info($data)
    {
         $this->db->insert('tbl_question', $data);
    }
    
     public function select_all_teacher_file() {
        $this->db->select('*');
        $this->db->from('tbl_teacher_file');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
	 public function select_all_teacher_file_by_id() {
        $this->db->select('*');
        $this->db->from('tbl_teacher_file');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

     public function select_teacher_file_info_by_id($file_id) {
        $this->db->select('*');
        $this->db->from('tbl_teacher_file');
        $this->db->where('file_id', $file_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }      
    
    public function select_all_published_teacher_file()
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher_file');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
	  public function delete_teacher_file_by_id($file_id)
    {
          $this->db->where('file_id',$file_id);
        $this->db->delete('tbl_teacher_file');
		
		   
    }
    
    public function select_all_published_question_archive()
    {
        $this->db->select('*');
        $this->db->from('tbl_question');
        $this->db->where('publication_status',1);
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
     public function check_password_login_info($teacher_old_password,$teacher_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('teacher_id',$teacher_id);
        $this->db->where('teacher_password',md5($teacher_old_password));
//        $password=md5($admin_password);
//        $sql="SELECT * FROM tbl_admin WHERE admin_email_address='$admin_email_address' AND admin_password='$password'";
//        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    
    //    _______________________________blog___________________
    
    
      public function select_all_blog_by_id(){
        
        $this->db->select('*');
        $this->db->from('tbl_blog');

       $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
    
    public function select_blog_info_by_id($blog_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id', $blog_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    public function update_blog_by_id($data,$blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog', $data);
    }
    
    public function delete_blog_by_id($blog_id){
        
        $this->db->where('blog_id', $blog_id);
        $this->db->delete('tbl_blog');
    }
     public function update_security_question($data,$teacher_id)
    {
         $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher', $data);
        
    }
    
        public function course_dept(){
        
        
        
            $query = $this->db->query('SELECT department_name FROM tbl_department');

            foreach ($query->result() as $row)
            {
                echo $row->department_name;
            }
        
        
        
    }
    
    
}
