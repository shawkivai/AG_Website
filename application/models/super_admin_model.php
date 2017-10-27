<?php

class Super_Admin_Model extends CI_Model {
    
    
    
    public function view_all_teacher_files()
    {$this->db->select('*');
    $this->db->from('tbl_teacher_file');
    $query_result = $this->db->get();
    $result = $query_result->result();

     return $result;
        
        
    }
     public function update_banner_image_info($data, $image_id) {
         

        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_banner_image', $data);
    }
     public function update_slider_image_info($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_slider_image', $data);
    }
     public function update_slider_image_info_2($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_slider_image', $data);
    }
     public function update_slider_image_info_3($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_slider_image', $data);
    }
     public function update_slider_image_info_4($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_slider_image', $data);
    }
     public function update_slider_image_info_5($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_slider_image', $data);
    }
    
//    ..................NAb Tab......................
     public function update_tab_info($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_nab_tab', $data);
    }
        
     public function update_tab_info_2($data, $image_id) {
        $this->db->where('image_id', $image_id);
//        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_nab_tab', $data);
    }
        
     public function update_tab_info_3($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_nab_tab', $data);
    }
     public function update_tab_info_4($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_nab_tab', $data);
    }
     public function update_tab_info_5($data, $image_id) {
        $this->db->where('image_id', $image_id);
        $this->db->update('tbl_nab_tab', $data);
    }
        
    //-----------------------department-----------------------------------
    
     public function save_department_info($data) {
        $this->db->insert('tbl_department', $data);
    }
 
    public function select_all_department() {
        $this->db->select('*');
        $this->db->from('tbl_department');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function update_publication_status_by_id($department_id) {

        $this->db->set('publication_status', 1);
        $this->db->where('department_id', $department_id);
        $this->db->update('tbl_department');
    }

    public function update_unpublication_status_by_id($department_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('department_id', $department_id);
        $this->db->update('tbl_department');
    }

    public function delete_department_by_id($department_id) {
        $this->db->where('department_id', $department_id);
        $this->db->delete('tbl_department');
    }

    public function update_department_info($data, $department_id) {
        $this->db->where('department_id', $department_id);
        $this->db->update('tbl_department', $data);
    }

    public function select_department_info_by_id($department_id) {
        $this->db->select('*');
        $this->db->from('tbl_department');
        $this->db->where('department_id', $department_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
     public function select_all_published_department()
    {
        $this->db->select('*');
        $this->db->from('tbl_department');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    
    
      //-----------------------gallery_category-----------------------------------
    
     public function save_gallery_category_info($data) {
        $this->db->insert('tbl_gallery_category', $data);
    }
 
    public function select_all_gallery_category() {
        $this->db->select('*');
        $this->db->from('tbl_gallery_category');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function update_gallery_category_publication_status_by_id($gallery_category_id) {

        $this->db->set('publication_status', 1);
        $this->db->where('department_id', $department_id);
        $this->db->update('tbl_department');
    }

    public function update_gallery_category_unpublication_status_by_id($gallery_category_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('gallery_category_id', $gallery_category_id);
        $this->db->update('tbl_gallery_category');
    }

    public function delete_gallery_category_by_id($gallery_category_id) {
        $this->db->where('gallery_category_id', $gallery_category_id);
        $this->db->delete('tbl_gallery_category');
    }

    public function update_gallery_category_info($data, $gallery_category_id) {
        $this->db->where('gallery_category_id', $gallery_category_id);
        $this->db->update('tbl_gallery_category', $data);
    }

    public function select_gallery_category_info_by_id($gallery_category_id) {
        $this->db->select('*');
        $this->db->from('tbl_gallery_category');
        $this->db->where('gallery_category_id', $gallery_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
     public function select_all_published_gallery_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery_category`');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    
    //----------------------------------------session------------------------
    
    public function save_session_info($data){
         $this->db->insert('tbl_session', $data);
    }
    public function save_result_info($data){
         $this->db->insert('tbl_result_file', $data);
    }
    
    public function select_all_session() {
        $this->db->select('*');
        $this->db->from('tbl_session');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function update_publication_session_by_id($session_id) {

        $this->db->set('publication_status', 1);
        $this->db->where('session_id', $session_id);
        $this->db->update('tbl_session');
    }

    public function update_unpublication_session_by_id($session_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('session_id', $session_id);
        $this->db->update('tbl_session');
    }

    public function delete_session_by_id($session_id) {
        $this->db->where('session_id', $session_id);
        $this->db->delete('tbl_session');
    }

    public function update_session_info($data, $session_id) {
        $this->db->where('session_id', $session_id);
        $this->db->update('tbl_session', $data);
    }

    public function select_session_info_by_id($session_id) {
        $this->db->select('*');
        $this->db->from('tbl_session');
        $this->db->where('session_id', $session_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }      
    
    public function select_all_published_session()
    {
        $this->db->select('*');
        $this->db->from('tbl_session');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    
    //-----------------------------------teacher------------------
    public function save_teacher_info($data)
    {
         $this->db->insert('tbl_teacher', $data);
    }
    public function select_all_teacher(){
        
         $sql="SELECT p.*,c.department_name FROM tbl_teacher as p,tbl_department as c WHERE  ( p.department_id=c.department_id)";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
    public function select_department_chairman(){
        
         $sql="SELECT p.*,c.teacher_name FROM tbl_department as p,tbl_teacher as c WHERE  ( p.teacher_id=c.teacher_id)";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
    
    
    public function update_publication_teacher_by_id($data,$teacher_id){
        $this->db->set('publication_status', 1);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher',$data);
    }
    public function update_unfeatured_teacher_by_department($department_id) {

        $this->db->set('chairman', 0);
        $this->db->where('chairman', 1);
        $this->db->where('department_id', $department_id);
        $this->db->update('tbl_teacher');
    }
    
    public function update_unpublication_teacher_by_id($teacher_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher');
    }
    
    public function update_chairman_by_id($teacher_id){
        $this->db->set('chairman', 1);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher');
    }
    
    public function update_unfeatured_teacher_by_id($teacher_id) {

        $this->db->set('chairman', 0);
        $this->db->where('teacher_id', $teacher_id);
        $this->db->update('tbl_teacher');
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
         public function select_all_published_teacher()
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
      
     //-----------------------------notice-------------------------  
         public function save_file_info($data)
    {
         $this->db->insert('tbl_notice', $data);
    }
    
    public function select_all_notice() {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function update_publication_notice_by_id($notice_id) {

        $this->db->set('publication_status', 1);
        $this->db->where('notice_id', $notice_id);
        $this->db->update('tbl_notice');
    }

    public function update_unpublication_notice_by_id($notice_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('notice_id', $notice_id);
        $this->db->update('tbl_notice');
    }

    public function delete_notice_by_id($notice_id) {
        $this->db->where('notice_id', $notice_id);
        $this->db->delete('tbl_notice');
    }

    public function update_notice_info($data, $notice_id) {
        $this->db->where('notice_id', $notice_id);
        $this->db->update('tbl_notice', $data);
    }

    public function select_notice_info_by_id($notice_id) {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $this->db->where('notice_id', $notice_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }      
    
    public function select_all_published_notice()
    {
        $this->db->select('*');
        $this->db->from('tbl_notice');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    //---------------------------semester----------
    public function save_semester_info($data) {
        $this->db->insert('tbl_semester', $data);
    }
 
    public function select_all_semester() {
        $this->db->select('*');
        $this->db->from('tbl_semester');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function update_publication_semester_by_id($semester_id) {

        $this->db->set('publication_status', 1);
        $this->db->where('semester_id', $semester_id);
        $this->db->update('tbl_semester');
    }

    public function update_unpublication_semester_by_id($semester_id) {

        $this->db->set('publication_status', 0);
        $this->db->where('semester_id', $semester_id);
        $this->db->update('tbl_semester');
    }

    public function delete_semester_by_id($semester_id) {
        $this->db->where('semester_id', $semester_id);
        $this->db->delete('tbl_semester');
    }

    public function update_semester_info($data, $semester_id) {
        $this->db->where('semester_id', $semester_id);
        $this->db->update('tbl_semester', $data);
    }

    public function select_semester_info_by_id($semester_id) {
        $this->db->select('*');
        $this->db->from('tbl_semester');
        $this->db->where('semester_id', $semester_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
     public function select_all_published_semester()
    {
        $this->db->select('*');
        $this->db->from('tbl_semester');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    //---------------------------course-----------
     public function select_all_course() {
        $this->db->select('*');
        $this->db->from('tbl_course');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

     public function select_course_by_id($course_id){
          $this->db->select('*');
        $this->db->from('tbl_course');
        $this->db->where('course_id',$course_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
     public function save_course_info($data)
     {
         $this->db->insert('tbl_course',$data);
     }
   
     
    
    public function update_publication_course($course_id){
        $this->db->set('publication_status',1);
        $this->db->where('course_id',$course_id);
        $this->db->update('tbl_course');
        
    }
    
    
    public function update_unpublication_course($course_id){
        $this->db->set('publication_status',0);
        $this->db->where('course_id',$course_id);
        $this->db->update('tbl_course');
    }
    
    public function delete_course_data($course_id){
        
        $this->db->where('course_id',$course_id);
        $this->db->delete('tbl_course');
        
        
    }
    
    public function update_blogstate($data,$blog_id){
        
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog',$data);
        
    }


    
        //-----------------------------news-------------------------  
         public function save_files_info($data)
    {
         $this->db->insert('tbl_news', $data);
    }
    
     public function select_all_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

     public function select_news_info_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }      
    
    public function select_all_published_news()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    //---------------------------------add admin file--------------
     public function save_admin_file_info($data)
    {
         $this->db->insert('tbl_admin_file', $data);
    }
    
    
     public function select_all_admin_file() {
        $this->db->select('*');
        $this->db->from('tbl_admin_file');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

     public function select_admin_file_info_by_id($file_id) {
        $this->db->select('*');
        $this->db->from('tbl_admin_file');
        $this->db->where('file_id', $file_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }      
    
    public function select_all_published_admin_file()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_file');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    //-------------------------------student-----------------------
     public function save_student_info($data)
    {
         $this->db->insert('tbl_student', $data);
    }
     public function select_student()
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
       
        
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_all_student(){
    
        
         $sql="SELECT p.*,c.session_name FROM tbl_student as p,tbl_session as c WHERE  ( p.session_id=c.session_id)";
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
    
    public function update_student_by_id($data,$student_id) {
        $this->db->where('student_id', $student_id);
        $this->db->update('tbl_student', $data);
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
         public function select_all_published_student()
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

//----------------------------------blog-----------------------------------
    public function select_blog_by_id($blog_id){
          $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
     public function save_blog_info($data)
     {
         $this->db->insert('tbl_blog',$data);
     }
     
     public function select_all_blog(){
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->order_by('blog_id','desc');
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
    }
    
    public function update_publication_blogstatus($blog_id){
        $this->db->set('publication_status',1);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
        
    }
    
    public function update_unpublication_blogstatus($blog_id){
        $this->db->set('publication_status',0);
        $this->db->where('blog_id',$blog_id);
        $this->db->update('tbl_blog');
    }
    
    public function delete_blog_data($blog_id){
        
        $this->db->where('blog_id',$blog_id);
        $this->db->delete('tbl_blog');
        
        
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
    
    public function check_password_login_info($admin_old_password,$admin_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id',$admin_id);
        $this->db->where('admin_password',md5($admin_old_password));
//        $password=md5($admin_password);
//        $sql="SELECT * FROM tbl_admin WHERE admin_email_address='$admin_email_address' AND admin_password='$password'";
//        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function delete_teacher_file_by_id($file_id) {
        $this->db->where('file_id', $file_id);
        $this->db->delete('tbl_teacher_file');
    }
    
      public function save_admin_image_info($data)
    {
         $this->db->insert('tbl_gallery_image', $data);
    }
    
     //------------------------------File-----------------------
     public function save_download_file_info($data)
    {
         $this->db->insert('tbl_file', $data);
    }
    public function select_all_download_file(){
        
        $this->db->select('*');
        $this->db->from('tbl_file');
  
       $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
    
    public function select_download_file_info_by_id($file_id) {
        $this->db->select('*');
        $this->db->from('tbl_file');
        $this->db->where('file_id', $file_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    public function update_download_file_by_id($data,$file_id) {
       
        $this->db->where('file_id', $file_id);
        $this->db->update('tbl_file', $data);
 
    }
    
    public function delete_download_file_by_id($file_id){
        
        $this->db->where('file_id', $file_id);
        $this->db->delete('tbl_file');
  return $result;
    }


    public function delete_download_file_location_by_id($file_id){
         $sql="SELECT * FROM tbl_file WHERE file_id='$file_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->file_location");
        
        
        $this->db->set('file_location', '');
        $this->db->where('file_id', $file_id);
        $this->db->update('tbl_file');
        
        return $result;
       }
       
       
       
       //-----------------------------Staff----------------------------------
    
     public function save_staff_info($data)
    {
         $this->db->insert('tbl_staff', $data);
    }
    
   
    public function select_all_staff(){
        
        $this->db->select('*');
        $this->db->from('tbl_staff');
  
       $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
    
    public function select_staff_info_by_id($staff_id) {
        $this->db->select('*');
        $this->db->from('tbl_staff');
        $this->db->where('staff_id', $staff_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    public function update_staff_by_id($data,$staff_id) {
        $this->db->where('staff_id', $staff_id);
        $this->db->update('tbl_staff', $data);
    }
    
    public function delete_staff_by_id($staff_id){
        
        $this->db->where('staff_id', $staff_id);
        $this->db->delete('tbl_staff');
    }


    public function delete_staff_image_by_id($staff_id){
         $sql="SELECT * FROM tbl_staff WHERE staff_id='$staff_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->staff_image");
        
        
        $this->db->set('staff_image', '');
        $this->db->where('staff_id', $staff_id);
        $this->db->update('tbl_staff');
        
        return $result;
       }
       
       
        
     //-------------------------------dean_office_staff-----------------------
     public function save_dean_office_staff_info($data)
    {
         $this->db->insert('tbl_dean_office', $data);
    }
    
      public function save_emba_office_staff_info($data)
    {
         $this->db->insert('tbl_emba_office', $data);
    }
    
    
    public function select_all_dean_office_staff(){
        
        $this->db->select('*');
        $this->db->from('tbl_dean_office');
  
       $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
     public function select_all_emba_office_staff(){
        
        $this->db->select('*');
        $this->db->from('tbl_emba_office');
  
       $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
    
    
    
    public function select_dean_office_staff_info_by_id($dean_office_staff_id) {
        $this->db->select('*');
        $this->db->from('tbl_dean_office');
        $this->db->where('dean_office_staff_id', $dean_office_staff_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    
    
        
    public function select_emba_office_staff_info_by_id($emba_office_staff_id) {
        $this->db->select('*');
        $this->db->from('tbl_emba_office');
        $this->db->where('emba_office_staff_id', $emba_office_staff_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    
    
    
    
    public function update_emba_office_staff_by_id($data,$emba_office_staff_id) {
        $this->db->where('emba_office_staff_id', $emba_office_staff_id);
        $this->db->update('tbl_emba_office', $data);
    }
    
    
    
      public function update_dean_office_staff_by_id($data,$dean_office_staff_id) {
        $this->db->where('dean_office_staff_id', $dean_office_staff_id);
        $this->db->update('tbl_dean_office', $data);
    }
    
    public function delete_dean_office_staff_by_id($dean_office_staff_id){
        
        $this->db->where('dean_office_staff_id', $dean_office_staff_id);
        $this->db->delete('tbl_dean_office');
    }
    
    
    public function delete_emba_office_staff_by_id($emba_office_staff_id){
        
        $this->db->where('emba_office_staff_id', $emba_office_staff_id);
        $this->db->delete('tbl_emba_office');
    }
    
    
    
    


    public function delete_dean_office_staff_image_by_id($dean_office_staff_id){
         $sql="SELECT * FROM tbl_dean_office WHERE dean_office_staff_id='$dean_office_staff_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->dean_office_staff_image");
        
        
        $this->db->set('dean_office_staff_image', '');
        $this->db->where('dean_office_staff_id', $dean_office_staff_id);
        $this->db->update('tbl_dean_office');
        
        return $result;
       }
       
       
        public function delete_emba_office_staff_image_by_id($emba_office_staff_id){
         $sql="SELECT * FROM tbl_emba_office WHERE emba_office_staff_id='$emba_office_staff_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
       
        
        unlink("$result->emba_office_staff_image");
        
        
        $this->db->set('emba_office_staff_image', '');
        $this->db->where('emba_office_staff_id', $emba_office_staff_id);
        $this->db->update('tbl_emba_office');
        
        return $result;
       }
       
       
            //----------------------------CSE PSTU About-----------------------
  
    public function select_all_about(){
        
        $this->db->select('*');
        $this->db->from('tbl_about');
  
       $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
    
    public function select_about_info_by_id($about_id) {
        $this->db->select('*');
        $this->db->from('tbl_about');
        $this->db->where('about_id', $about_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    
    public function update_about_by_id($data,$about_id) {
        $this->db->where('about_id', $about_id);
        $this->db->update('tbl_about', $data);
    }
    
    public function delete_about_by_id($about_id){
        
        $this->db->where('about_id', $about_id);
        $this->db->delete('tbl_about');
    }
    public function select_all_messages_info(){
        $this->db->select('*');
        $this->db->from('tbl_message');
        $query_result= $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }


}






































 