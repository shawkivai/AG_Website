<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Visitor extends MY_Controller {
 public function index() {
 $data=array('isi'  	=>'home/index_home');
 $this->load->view('master',$data); 
 }
}