<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $count_visitor;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('counter');
        $this->count_visitor = count_visitor();
    }   
}