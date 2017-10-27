<?php
class Teacher_Model extends CI_Model {
    //put your code here
    
    public function check_teacher_login_info($teacher_email,$teacher_password)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('teacher_email',$teacher_email);
        $this->db->where('teacher_password',md5($teacher_password));
//        $password=md5($admin_password);
//        $sql="SELECT * FROM tbl_admin WHERE admin_email_address='$admin_email_address' AND admin_password='$password'";
//        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function check_teacher_email_info($teacher_email)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('teacher_email',$teacher_email);
      $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function check_teacher_question_info($teacher_email,$security_question,$answer)
    {
        $this->db->select('*');
        $this->db->from('tbl_teacher');
        $this->db->where('teacher_email',$teacher_email);
        $this->db->where('security_question',$security_question);
        $this->db->where('answer',$answer);
       
      
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
