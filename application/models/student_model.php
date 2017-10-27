<?php
class Student_Model extends CI_Model {
    //put your code here
    
    public function check_student_login_info($student_reg_no,$student_password)
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('student_reg_no',$student_reg_no);
        $this->db->where('student_password',md5($student_password));
//        $password=md5($admin_password);
//        $sql="SELECT * FROM tbl_admin WHERE admin_email_address='$admin_email_address' AND admin_password='$password'";
//        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
