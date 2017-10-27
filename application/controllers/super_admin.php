<?php
session_start();
class Super_Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
       $admin_id=$this->session->userdata('admin_id');
        if($admin_id ==NULL)
        {
            redirect('admin','refresh');
        }
         $this->load->model('super_admin_model','sa_model');
          
       
    }
    
    public function index()
    {
        $data=array();
      $data['admin_main_content']=$this->load->view('admin/dashbord','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function logout()
    {
        $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('admin_id');
        $sdata=array();
        $sdata['message']='You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('admin/index');
        
    }
    /*
         * -------  add banner--------
         */
    
     public function add_banner()
    {
        $data=array();              
        $data['admin_main_content']=$this->load->view('admin/add_banner_image',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
  
     public function save_banner_image()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');      
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {  $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_banner_image_info($data,$image_id);
        $sdata=array();
        $sdata['message']='Save Banner Image Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_banner');
    }
    
    public function manage_teacher_files()
      {$data=array();
      $data['teacher_files']=$this->sa_model->view_all_teacher_files();
      $data['admin_main_content']=$this->load->view('admin/manage_teacher_file',$data,true);
      $this->load->view('admin/admin_master',$data);
      }         
    
    
     public function add_slider()
    {
        $data=array();         
        $data['admin_main_content']=$this->load->view('admin/update_slider_image',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
     public function save_slider_image()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        { $error =  $this->upload->display_errors();
                echo $error;
                exit();
         
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_slider_image_info($data,$image_id);
        $sdata=array();
        $sdata['message']='1st Banner Image Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_slider');
    }
     public function save_slider_image_2()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {  $error =  $this->upload->display_errors();
                echo $error;
                exit();
       
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_slider_image_info_2($data,$image_id);
        $sdata=array();
        $sdata['message2']='2nd Banner Image Updated Successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_slider');
    }
     public function save_slider_image_3()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
             $error =  $this->upload->display_errors();
                echo $error;
                exit();
  
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_slider_image_info_3($data,$image_id);
        $sdata=array();
        $sdata['message3']='3rd Banner Image Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_slider');
    }
     public function save_slider_image_4()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
             $error =  $this->upload->display_errors();
                echo $error;
                exit();
  
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_slider_image_info_4($data,$image_id);
        $sdata=array();
        $sdata['message4']='4th Banner Image Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_slider');
    }
     public function save_slider_image_5()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
             $error =  $this->upload->display_errors();
                echo $error;
                exit();
  
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_slider_image_info_5($data,$image_id);
        $sdata=array();
        $sdata['message5']='5th Banner Image Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_slider');
    }
//    ................Nab Tab..................
    
      public function add_tab()
    {
        $data=array();
        
        
        $data['admin_main_content']=$this->load->view('admin/update_tab',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    public function save_tab()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        $data['heading']=$this->input->post('heading',true); 
          $data['descriptions']=$this->input->post('descriptions',true); 
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
             $error =  $this->upload->display_errors();
                echo $error;
                exit();
    
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_tab_info($data,$image_id);
        $sdata=array();
        $sdata['message']='Achievement Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_tab');
    }
    
    
    public function save_tab_2()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
      
       $data['heading']=$this->input->post('heading',true); 
          $data['descriptions']=$this->input->post('descriptions',true); 
   
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
               
                
              $error =  $this->upload->display_errors();
                echo $error;
                exit();
       
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_tab_info_2($data,$image_id);
        $sdata=array();
        $sdata['message2']='Club Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_tab');
    }
    
        public function save_tab_3()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        $data['heading']=$this->input->post('heading',true); 
          $data['descriptions']=$this->input->post('descriptions',true); 
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
            $error =  $this->upload->display_errors();
                echo $error;
                exit();
        
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_tab_info_3($data,$image_id);
        $sdata=array();
        $sdata['message3']='Activity Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_tab');
    }
    
        public function save_tab_4()
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        $data['heading']=$this->input->post('heading',true); 
          $data['descriptions']=$this->input->post('descriptions',true); 
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
               
           $error =  $this->upload->display_errors();
                echo $error;
                exit();
         
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_tab_info_4($data,$image_id);
        $sdata=array();
        $sdata['message4']='Honor Board Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_tab');
    }
    
    
        public function save_tab_5()
                
    {    
        $data=array();
      $image_id=$this->input->post('image_id');
        $data['heading']=$this->input->post('heading',true); 
          $data['descriptions']=$this->input->post('descriptions',true); 
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
               
            $error =  $this->upload->display_errors();
                echo $error;
                exit();
         
        }
        else
        {
                $fdata = $this->upload->data();
                $data['image_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->update_tab_info_5($data,$image_id);
        $sdata=array();
        $sdata['message5']='Scholarship Updated Successfully! !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_tab');
    }
    
    
    
    
    
    
    
    
    
    
    //-----------------------department--------------------------------
    public function add_department()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('admin/add_department_form','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_department()
    {
        $data=array();
        $data['department_name']=$this->input->post('department_name',true);
        $data['department_description']=$this->input->post('department_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
      
        $this->sa_model->save_department_info($data);
        $sdata=array();
        $sdata['message']='Save Department Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_department');
    }
    public function manage_department()
    {
        $data=array();
        $data['all_department']=$this->sa_model->select_all_department();
        $data['admin_main_content']=$this->load->view('admin/manage_department',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function published_department($department_id)
    {
       
        $this->sa_model->update_publication_status_by_id($department_id);
        redirect('super_admin/manage_department');
    }
  public function unpublished_department($department_id)
    {
       
        $this->sa_model->update_unpublication_status_by_id($department_id);
        redirect('super_admin/manage_department');
    }
    
    public function edit_department($department_id)
    {
        $data=array();
        $data['all_teacher']=$this->sa_model->select_all_teacher();
        $data['department_info']=$this->sa_model->select_department_info_by_id($department_id);
        $data['admin_main_content']=$this->load->view('admin/edit_department',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_department()
    {
        $data=array();
        $department_id=$this->input->post('department_id');
        $data['department_name']=$this->input->post('department_name');
        $data['department_description']=$this->input->post('department_description');
        $data['chairman_id']=$this->input->post('chairman_id');
        $data['publication_status']=$this->input->post('publication_status');
        $this->sa_model->update_department_info($data,$department_id);
        redirect('super_admin/manage_department');
    }

    public function delete_department($department_id)
    {
        $this->sa_model->delete_department_by_id($department_id);
        redirect('super_admin/manage_department');
    }
    public function delete_teacher_file($file_id)
    {
        $this->sa_model->delete_teacher_file_by_id($file_id);
        redirect('super_admin/manage_teacher_files');
    }
    
    
    
    
    
    
    //-----------------------Gallery Category--------------------------------
    public function add_gallery_category()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('admin/add_gallery_category_form','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_gallery_category()
    {
        $data=array();
        $data['gallery_category_name']=$this->input->post('gallery_category_name',true);
        $data['gallery_category_description']=$this->input->post('gallery_category_description',true);
       
        
          /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('file_location'))
        {
               
                
                /*
         *  $error =  $this->upload->display_errors();
                echo $error;
                exit();
         */
        }
        else
        {
                $fdata = $this->upload->data();
                $data['file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
      
        $this->sa_model->save_gallery_category_info($data);
        $sdata=array();
        $sdata['message']='Save Gallery Category Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_gallery_category');
    }
    public function manage_gallery_category()
    {
        $data=array();
        $data['all_gallery_category']=$this->sa_model->select_all_gallery_category();
        $data['admin_main_content']=$this->load->view('admin/manage_gallery_category',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function published_gallery_category($gallery_category_id)
    {
       
        $this->sa_model->update_publication_status_by_id($gallery_category_id);
        redirect('super_admin/manage_gallery_category');
    }
  public function unpublished_gallery_category($gallery_category_id)
    {
       
        $this->sa_model->update_unpublication_status_by_id($gallery_category_id);
        redirect('super_admin/manage_department');
    }
    
    public function edit_gallery_category($gallery_category_id)
    {
        $data=array();
        $data['gallery_category_info']=$this->sa_model->select_gallery_category_info_by_id($gallery_category_id);
        $data['admin_main_content']=$this->load->view('admin/edit_gallery_category',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_gallery_category()
    {
        $data=array();
        $gallery_category_id=$this->input->post('gallery_category_id');
        $data['gallery_category_name']=$this->input->post('gallery_category_name');
        $data['gallery_category_description']=$this->input->post('department_description');
       
        $this->sa_model->update_gallery_category_info($data,$gallery_category_id);
        redirect('super_admin/manage_gallery_category');
    }

    public function delete_gallery_category($gallery_category_id)
    {
        $this->sa_model->delete_gallery_category_by_id($gallery_category_id);
        redirect('super_admin/manage_gallery_category');
    }
    
    //---------------------------------session------------------------------
    
    
    
     public function add_session(){
        
         $data=array();
        $data['admin_main_content']=$this->load->view('admin/add_session','',true);
        $this->load->view('admin/admin_master',$data);
        
    }
    public function save_session()
    {
        $data=array();
        $data['session_name']=$this->input->post('session_name',true);
        $data['session_description']=$this->input->post('session_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
      
        $this->sa_model->save_session_info($data);
        $sdata=array();
        $sdata['message']='Successfully saved session Information  !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_session');
    }
    
    public function manage_session()
    {
        $data=array();
        $data['all_session']=$this->sa_model->select_all_session();
        $data['admin_main_content']=$this->load->view('admin/manage_session',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function published_session($session_id)
    {
       
        $this->sa_model->update_publication_session_by_id($session_id);
        redirect('super_admin/manage_session');
    }
  public function unpublished_session($session_id)
    {
       
        $this->sa_model->update_unpublication_session_by_id($session_id);
        redirect('super_admin/manage_session');
    }
  
    public function edit_session($session_id)
    {
        $data=array();
        $data['session_info']=$this->sa_model->select_session_info_by_id($session_id);
        $data['admin_main_content']=$this->load->view('admin/edit_session',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_session()
    {
        $data=array();
        $session_id=$this->input->post('session_id');
        $data['session_name']=$this->input->post('session_name');
        $data['session_description']=$this->input->post('session_description');
        $data['publication_status']=$this->input->post('publication_status');
        $this->sa_model->update_session_info($data,$session_id);
        redirect('super_admin/manage_session');
    }

    public function delete_session($session_id)
    {
        $this->sa_model->delete_session_by_id($session_id);
        redirect('super_admin/manage_session');
    }
    
    
    //--------------------teacher-------------------------------------
    
        
    
   public function add_teacher()
    {
        $data=array();
        $data['all_published_department']=$this->sa_model->select_all_published_department();
        
        $data['admin_main_content']=$this->load->view('admin/add_teacher',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_teacher()
    {    
        $data=array();
        $data['teacher_name']=$this->input->post('teacher_name',true);
        $data['department_id']=$this->input->post('department_id',true);
        $data['teacher_designation']=$this->input->post('teacher_designation',true);
        $data['teacher_about']=$this->input->post('teacher_about',true);
        $data['teacher_contact_no']=$this->input->post('teacher_contact_no',true);
        $data['research_area']=$this->input->post('research_area',true);        
        $data['teacher_education']=$this->input->post('teacher_education',true);        
        $chairman=$this->input->post('chairman',true);
        if($chairman=='on')
        {
             $data['chairman']=1;
        }
        $data['publication_status']=$this->input->post('publication_status',true);
        
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/teacher_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size']	= '1000';
        $config['max_width']  = '2024';
        $config['max_height']  = '1968';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('teacher_image'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['teacher_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          $data['teacher_email']=$this->input->post('teacher_email',true); 
        $data['teacher_password']=md5($this->input->post('teacher_password',true)); 
        $this->sa_model->save_teacher_info($data);
        $sdata=array();
        $sdata['message']='Save Teacher Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_teacher');
    }
    public function manage_teacher()
    {
        $data=array();
        $data['all_teacher']=$this->sa_model->select_all_teacher();
        $data['admin_main_content']=$this->load->view('admin/manage_teacher',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
     public function published_teacher($teacher_id)
    {
       
        $this->sa_model->update_publication_teacher_by_id($teacher_id);
        redirect('super_admin/manage_teacher');
    }
     public function unpublished_teacher($teacher_id)
    {
       
        $this->sa_model->update_unpublication_teacher_by_id($teacher_id);
        redirect('super_admin/manage_teacher');
    }
    
    public function chairman($teacher_id,$department_id)
    {
       $this->sa_model->update_unfeatured_teacher_by_department($department_id);
        $this->sa_model->update_chairman_by_id($teacher_id);
       
        
        redirect('super_admin/manage_teacher');
    }
    
    public function unfeatured_teacher($teacher_id)
    {
       
        $this->sa_model->update_unfeatured_teacher_by_id($teacher_id);
        redirect('super_admin/manage_teacher');
    }
    
     public function edit_teacher($teacher_id)
    {
        $data=array();
         $data['all_published_department']=$this->sa_model->select_all_published_department();
        
        $data['teacher_info']=$this->sa_model->select_teacher_info_by_id($teacher_id);
        $data['admin_main_content']=$this->load->view('admin/edit_teacher',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function update_teacher(){
        
       $data=array();
        $teacher_id= $this->input->post('teacher_id');
        $data['teacher_name']=$this->input->post('teacher_name');
        $data['department_id']=$this->input->post('department_id');
       
        $data['teacher_designation']=$this->input->post('teacher_designation');
        $data['teacher_about']=$this->input->post('teacher_about');
        $data['teacher_contact_no']=$this->input->post('teacher_contact_no');
        
                $data['research_area']=$this->input->post('research_area');
      
       $chairman=$this->input->post('chairman');
        if($chairman=='on')
        {
             $data['chairman']=1;
        }
        else{
            $data['chairman']=0;
        }

        /*
         * ------- Start Image Upload---------
         */
        
//        if($this->input->post('featured_image')){
        $config['upload_path'] = 'images/teacher_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '';
        $config['max_width']  = '';
        $config['max_height']  = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ($this->upload->do_upload('teacher_image'))
        {
                 $fdata = $this->upload->data();
                $data['teacher_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        /*
         * --------End Image Upload---------
         */
//        }
        $data['publication_status']=$this->input->post('publication_status');
          $data['teacher_email']=$this->input->post('teacher_email',true); 
        
        
        $this->sa_model->update_teacher_by_id($data,$teacher_id);
        redirect('super_admin/manage_teacher');
    }
    public function delete_teacher($teacher_id)
    {
        $this->sa_model->delete_teacher_by_id($teacher_id);
        redirect('super_admin/manage_teacher');
    }
     public function delete_image($teacher_id)
    {
         $data=array();
        $data['img']=$this->sa_model->delete_image_by_id($teacher_id);
    
         $data['all_published_department']=$this->sa_model->select_all_published_department();
   
        $data['teacher_info']=$this->sa_model->select_teacher_info_by_id($teacher_id);
        $data['admin_main_content']=$this->load->view('admin/edit_teacher',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    //----------------------------------notice-------------------------------------
    
    public function add_file()
    {
        $data=array();
        
        
        $data['admin_main_content']=$this->load->view('admin/add_notice',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_file()
    {    
        $data=array();
        
        
        
        ///database                                  ///view page field
        $data['notice_title']=$this->input->post('file_name',true);
        $data['notice_short_description']=$this->input->post('file_short_description',true);
        $data['notice_long_description']=$this->input->post('file_long_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $data['author_name']=$this->session->userdata('full_name');
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
               
                
                /*
         *  $error =  $this->upload->display_errors();
                echo $error;
                exit();
         */
        }
        else
        {
                $fdata = $this->upload->data();
                $data['file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->save_file_info($data);
        $sdata=array();
        $sdata['message']='Save Notice Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_file');
    }
    
    public function manage_notice()
    {
        $data=array();
        $data['all_notice']=$this->sa_model->select_all_notice();
        $data['admin_main_content']=$this->load->view('admin/manage_notice',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function published_notice($notice_id)
    {
       
        $this->sa_model->update_publication_notice_by_id($notice_id);
        redirect('super_admin/manage_notice');
    }
  public function unpublished_notice($notice_id)
    {
       
        $this->sa_model->update_unpublication_notice_by_id($notice_id);
        redirect('super_admin/manage_notice');
    }
  
    public function edit_notice($notice_id)
    {
        $data=array();
        $data['notice_info']=$this->sa_model->select_notice_info_by_id($notice_id);
        $data['admin_main_content']=$this->load->view('admin/edit_notice',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_notice()
    {
        $data=array();
        $notice_id=$this->input->post('notice_id');
        $data['notice_title']=$this->input->post('notice_title');
        $data['notice_description']=$this->input->post('notice_description');
        $data['publication_status']=$this->input->post('publication_status');
        $this->sa_model->update_notice_info($data,$notice_id);
        redirect('super_admin/manage_notice');
    }

    public function delete_notice($notice_id)
    {
        $this->sa_model->delete_notice_by_id($notice_id);
        redirect('super_admin/manage_notice');
    }
    
    
    //---------------------------------semester--------------------------
    public function add_semester()
    {
        $data=array();
        $data['admin_main_content']=$this->load->view('admin/semester/add_semester_form','',true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_semester()
    {
        $data=array();
        $data['semester_name']=$this->input->post('semester_name',true);
        $data['semester_description']=$this->input->post('semester_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
      
        $this->sa_model->save_semester_info($data);
        $sdata=array();
        $sdata['message']='Save Semester Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_semester');
    }
    public function manage_semester()
    {
        $data=array();
        $data['all_semester']=$this->sa_model->select_all_semester();
        $data['admin_main_content']=$this->load->view('admin/semester/manage_semester',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function published_semester($semester_id)
    {
       
        $this->sa_model->update_publication_semester_by_id($semester_id);
        redirect('super_admin/manage_semester');
    }
  public function unpublished_semester($semester_id)
    {
       
        $this->sa_model->update_unpublication_semester_by_id($semester_id);
        redirect('super_admin/manage_semester');
    }
    
    public function edit_semester($semester_id)
    {
        $data=array();
        $data['semester_info']=$this->sa_model->select_semester_info_by_id($semester_id);
        $data['admin_main_content']=$this->load->view('admin/semester/edit_semester',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function update_semester()
    {
        $data=array();
        $semester_id=$this->input->post('semester_id');
        $data['semester_name']=$this->input->post('semester_name');
        $data['semester_description']=$this->input->post('semester_description');
        $data['publication_status']=$this->input->post('publication_status');
        $this->sa_model->update_semester_info($data,$semester_id);
        redirect('super_admin/manage_semester');
    }

    public function delete_semester($semester_id)
    {
        $this->sa_model->delete_semester_by_id($semester_id);
        redirect('super_admin/manage_semester');
    }
    
    //--------------------course---------------------------
    
       public function add_course() {
        $data = array();


        $data['all_published_semester'] = $this->welcome_model->select_all_published_semester();

        $data['admin_main_content'] = $this->load->view('admin/course/add_course_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
    
    public function save_course(){
        
        
        $data=array();
        
        
        $data['course_code']=  $this->input->post('course_code',true);
        $data['semester_id']=  $this->input->post('semester_id',true);
        $data['course_title']=  $this->input->post('course_title',true);
        $data['credit_hour']=  $this->input->post('credit_hour',true);
        $data['publication_status']=  $this->input->post('publication_status',true);
        
          /*
         * ------- Start PDF Upload---------
         */
       $config['upload_path'] = 'uploads/course_files/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|ppt|pptx';
        $config['max_size']	= '10000';
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('selected_course_file'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['course_file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
    /*
         * --------End Image Upload---------
         */
        
        $this->sa_model->save_course_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Course Information Successfully !';
        $this->session->set_userdata($sdata);

        redirect('super_admin/add_course');
        
    }
    
    public function manage_course(){
        
         $data = array();

        $data['all_course'] = $this->sa_model->select_all_course();
        $data['admin_main_content'] = $this->load->view('admin/course/manage_course',$data, true);
        $this->load->view('admin/admin_master', $data);
        
    }
    
    public function published_course($course_id) {

        $this->sa_model->update_publication_course($course_id);
        redirect('super_admin/manage_course');
    }
    
    
    public function unpublished_course($course_id){
         $this->sa_model->update_unpublication_course($course_id);
        redirect('super_admin/manage_course');
    }
    
    public function delete_course($course_id){
        
         $this->sa_model->delete_course_data($course_id);
        redirect('super_admin/manage_course');
    }
    
    public function edit_course($course_id){
        
        $data=array();
     
       $data['all_published_semester'] = $this->sa_model->select_all_published_semester();
        $data['course_info']=$this->sa_model->select_course_by_id($course_id);
        $data['admin_main_content'] = $this->load->view('admin/course/edit_course',$data, true);
        $this->load->view('admin/admin_master', $data);
        
    }
    public function update_course(){
        
        $data=array();
        $course_id= $this->input->post('course_id');
        $data['course_title']=$this->input->post('course_title');
        $data['credit_hour']=$this->input->post('credit_hour');
        $data['semester_id']=$this->input->post('semester_id');
        
        $data['publication_status']=$this->input->post('publication_status');
        
         /*
         * ------- Start PDF Upload---------
         */
       $config['upload_path'] = 'uploads/course_files/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|ppt|pptx';
        $config['max_size']	= '10000';
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('selected_course_file'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['course_file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        $this->sa_model->update_course($data,$course_id);
        redirect('super_admin/manage_course');
    }
    //-------------------------------news and event----------------------------
     public function add_files()
    {
        $data=array();
        
        
        $data['admin_main_content']=$this->load->view('admin/add_news',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_files()
    {    
        $data=array();
        $data['news_title']=$this->input->post('file_name',true);
        $data['news_short_description']=$this->input->post('file_short_description',true);
        $data['news_long_description']=$this->input->post('file_long_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $data['author_name']=$this->session->userdata('full_name');
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wkv|zip';
        $config['max_size']	= '1000';
        $config['max_width']  = '2024';
        $config['max_height']  = '1968';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->save_files_info($data);
        $sdata=array();
        $sdata['message']='Save Notice Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_file','refresh');
    }
    //------------------------admin file upload---------------------------------
    
    public function add_gallery_image()
    {
        $data=array();
        
        $data['gallery_category']=$this->welcome_model->select_gallery_category();
        $data['admin_main_content']=$this->load->view('admin/add_admin_image',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_gallery_image()
    {    
        $data=array();
        $data['file_name']=$this->input->post('file_name',true);
        $data['category_id']=$this->input->post('category_id',true);
        
        $data['file_location']=$this->input->post('file_location',true);
        
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'uploads/admin_uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '10000';
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->save_admin_image_info($data);
        $sdata=array();
        $sdata['message']='Image uploaded Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_gallery_image','refresh');
    }
    
    
   //------------------------------------student--------------------------
        public function add_student()
    {
        $data=array();
        $data['all_published_session']=$this->sa_model->select_all_published_session();
        
        $data['admin_main_content']=$this->load->view('admin/add_student',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_student()
    {    
        $data=array();
        $data['student_name']=$this->input->post('student_name',true);
        $data['session_id']=$this->input->post('session_id',true);
          $data['student_roll_no']=$this->input->post('student_roll_no',true); 
          $data['student_reg_no']=$this->input->post('student_reg_no',true); 
          $data['student_semester']=$this->input->post('student_semester',true); 
          $data['student_address']=$this->input->post('student_address',true); 
          $data['student_hall']=$this->input->post('student_hall',true); 
          $data['student_father_name']=$this->input->post('student_father_name',true); 
          $data['student_mother_name']=$this->input->post('student_mother_name',true); 
          $data['guardian_contact_no']=$this->input->post('guardian_contact_no',true); 
          $data['student_contact_no']=$this->input->post('student_contact_no',true); 
          $data['student_batch']=$this->input->post('student_batch',true); 
          $data['student_gender']=$this->input->post('student_gender',true); 
         
        $data['publication_status']=$this->input->post('publication_status',true);
        
        /*
         *  $data['student_cgpa']=$this->input->post('student_cgpa',true); 
          $data['student_gpa_first']=$this->input->post('student_gpa_first',true); 
          $data['student_gpa_second']=$this->input->post('student_gpa_second',true); 
          $data['student_gpa_third']=$this->input->post('student_gpa_third',true); 
          $data['student_gpa_fourth']=$this->input->post('student_gpa_fourth',true); 
          $data['student_gpa_fifth']=$this->input->post('student_gpa_fifth',true); 
          $data['student_gpa_sixth']=$this->input->post('student_gpa_sixth',true); 
          $data['student_gpa_seventh']=$this->input->post('student_gpa_seventh',true); 
          $data['student_gpa_eighth']=$this->input->post('student_gpa_eighth',true); 
         */
        
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/teacher_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
        $config['max_size']	= '1000';
        $config['max_width']  = '2024';
        $config['max_height']  = '1968';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('student_image'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['student_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          $data['student_email']=$this->input->post('student_email',true); 
        $data['student_password']=md5($this->input->post('student_password',true)); 
        $this->sa_model->save_student_info($data);
        $sdata=array();
        $sdata['message']=' Student Information saved Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_student');
    }
    public function manage_student()
    {
        $data=array();
        $data['all_student']=$this->sa_model->select_student();
        $data['admin_main_content']=$this->load->view('admin/manage_student',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
     public function published_student($student_id)
    {
       
        $this->sa_model->update_publication_student_by_id($student_id);
        redirect('super_admin/manage_student');
    }
     public function unpublished_student($student_id)
    {
       
        $this->sa_model->update_unpublication_student_by_id($student_id);
        redirect('super_admin/manage_student');
    }
    
    
    
      public function edit_student($student_id)
    {
        $data=array();
         $data['all_published_session']=$this->sa_model->select_all_published_session();
        
        $data['student_info']=$this->sa_model->select_student_info_by_id($student_id);
        $data['admin_main_content']=$this->load->view('admin/edit_student',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function update_student(){
        
       $data=array();
        $student_id= $this->input->post('student_id');
        $data['student_name']=$this->input->post('student_name');
        $data['session_id']=$this->input->post('session_id');
       
        

        /*
         * ------- Start Image Upload---------
         */
        
//        if($this->input->post('featured_image')){
        $config['upload_path'] = 'images/teacher_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
        $config['max_size']	= '';
        $config['max_width']  = '';
        $config['max_height']  = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ($this->upload->do_upload('student_image'))
        {
                 $fdata = $this->upload->data();
                $data['student_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        /*
         * --------End Image Upload---------
         */
//        }
        $data['publication_status']=$this->input->post('publication_status');
          $data['student_email']=$this->input->post('student_email',true); 
        $data['student_password']=md5($this->input->post('student_password',true)); 
        
        $this->sa_model->update_student_by_id($data,$student_id);
        redirect('super_admin/manage_student');
    }
    public function delete_student($student_id)
    {
        $this->sa_model->delete_student_by_id($student_id);
        redirect('super_admin/manage_student');
    }
     public function delete_student_image($student_id)
    {
         $data=array();
        $data['img']=$this->sa_model->delete_student_image_by_id($student_id);
    
         $data['all_published_session']=$this->sa_model->select_all_published_session();
   
        $data['student_info']=$this->sa_model->select_student_info_by_id($student_id);
        $data['admin_main_content']=$this->load->view('admin/edit_student',$data,true);
        $this->load->view('admin/admin_master',$data);
    }

    //---------------------------blog---------------------------------------
    public function add_blog()
    {
        
        $data=array();
        $data['all_published_category']=$this->welcome_model->select_all_published_category();
        $data['admin_main_content']=$this->load->view('admin/add_blog_form',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_blog()
    {
        $data=array();
        $data['blog_title']=$this->input->post('blog_title',true);
        
        
        $data['blog_short_description']=$this->input->post('blog_short_description',true);
        $data['blog_description']=$this->input->post('blog_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $data['author_name']=$this->session->userdata('full_name');
       $this->super_admin_model->save_blog_info($data);
       $sdata=array();
       $sdata['message']="Article Saved Successfully !";
       $this->session->set_userdata($sdata);
       redirect('super_admin/add_blog');
    }
    public function manage_blog(){
        
         $data = array();

        $data['all_blog'] = $this->super_admin_model->select_all_blog();
        $data['admin_main_content'] = $this->load->view('admin/manage_blog',$data, true);
        $this->load->view('admin/admin_master', $data);
        
    }
    
    public function published_blog($blog_id) {

        $this->sa_model->update_publication_blogstatus($blog_id);
        redirect('super_admin/manage_blog');
    }
    
    
    public function unpublished_blog($blog_id){
         $this->sa_model->update_unpublication_blogstatus($blog_id);
        redirect('super_admin/manage_blog');
    }
    
    public function delete_blog($blog_id){
        
         $this->sa_model->delete_blog_data($blog_id);
        redirect('super_admin/manage_blog');
    }
    
    public function view_blog()
	{
                        $data=array();
                        
                        $data['all_published_blog']=$this->sa_model->select_all_published_blog();
                        
                        
                        $data['admin_main_content']=$this->load->view('admin/blog',$data,true);
                        $data['slider']=1;
                        $data['title']='blog';
                        $this->load->view('admin/admin_master',$data);
	}
        
    public function blog_details($blog_id)
                    {
                        $data=array();
                       
                        $data['blog_info']=$this->sa_model->blog_info_by_id($blog_id);
                       $data['blog_comments']=$this->sa_model->select_comments_by_blog_id($blog_id);
                        $data['admin_main_content']=$this->load->view('blog_details',$data,true);
                        $data['slider']='';
                        $data['title']='blog details';
                        $this->load->view('admin/admin_master',$data);
                    }
                    
     public function save_comments()
                    {
                        $data=array();
                        $data['blog_id']=$this->input->post('blog_id');
                        $data['comments_author_name']=$this->session->userdata('full_name');
                        //$data['comments_author_email']=$this->session->userdata('admin_email');
                        $data['comments']=$this->input->post('comments');
                        $this->sa_model->save_blog_comments($data);
                        $sdata=array();
                        
                        $this->session->set_userdata($sdata);
                        redirect('super_student/blog_details/'.$this->input->post('blog_id'));
                    }



 
    public function add_result()
    {
        $data=array();
        
        
        $data['admin_main_content']=$this->load->view('admin/add_result_file',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
  
     public function save_result_file()
    {    
         
         
         
        $data=array();
        $data['semester']=$this->input->post('semester',true);
         $data['author_name']=$this->session->userdata('admin_full_name');
       
      
       
         
         
       
        
      
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|mp4|wmv|zip';
        $config['max_size']	= '100000';
        $config['max_width']  = '2024000';
        $config['max_height']  = '1968000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('seleced_file'))
        {
               
                
                /*
         *  $error =  $this->upload->display_errors();
                echo $error;
                exit();
         */
        }
        else
        {
                $fdata = $this->upload->data();
                $data['result_file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
       $this->sa_model->save_result_info($data);
        $sdata=array();
        $sdata['message']='Successfully saved result file  !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_result');
         
    }
    
   
public function change_password()
    {
        $this->load->view('admin/change_pass');
    }
    public function check_password()
    {
        $admin_id=$this->session->userdata('admin_id');
       // $admin_email_address=$this->input->post('admin_email_address',true);
        $admin_old_password=$this->input->post('admin_old_password',true);
        $admin_new_password=$this->input->post('admin_new_password',true);
        //$this->load->model('admin_model','a_model');
       $result= $this->sa_model->check_password_login_info($admin_old_password,$admin_id);
//       echo '<pre>';
//       print_r($result);
//       exit();
       $sdata=array();
       
       if($result)
       {
           $this->db->set('admin_password',md5($admin_new_password));
        $this->db->where('admin_id', $admin_id);
        $this->db->update('tbl_admin');
        $sdata['message']='Your User Password Changed !';
        $this->session->set_userdata($sdata);
        
        
        redirect('super_admin');
        //redirect('admin');
       }
       else{
           $sdata['message']='Please Enter Valid Old Password !';
           $this->session->set_userdata($sdata);
           redirect('super_admin/change_password');
       }
    }
    
    
          
//    _____________________File Upload____________________________
    
        public function add_download_file()
    {
        $data=array();
        
        
        $data['admin_main_content']=$this->load->view('admin/add_download_file',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_download_file()
    {    
        $data=array();
        $data['file_name']=$this->input->post('file_name',true);
        $data['file_category']=$this->input->post('file_category',true);
       
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'files/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|txt';
        $config['max_size']	= '3000';
        $config['max_width']  = '2024';
        $config['max_height']  = '1968';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('file_location'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
    
        $this->sa_model->save_download_file_info($data);
        $sdata=array();
        $sdata['message']=' File saved Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_download_file');
    }
    public function manage_download_file()
    {
        $data=array();
        $data['all_file']=$this->sa_model->select_all_download_file();
        $data['admin_main_content']=$this->load->view('admin/manage_download_file',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
    
      public function edit_download_file($file_id)
    {
        $data=array();
        
        $data['file_info']=$this->sa_model->select_download_file_info_by_id($file_id);
        $data['admin_main_content']=$this->load->view('admin/edit_download_file',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function update_download_file(){
        
       $data=array();
        $file_id= $this->input->post('file_id',true);
        $data['file_name']=$this->input->post('file_name',true);
        $data['file_category']=$this->input->post('file_category',true);
      
       
        

        /*
         * ------- Start file Upload---------
         */
        

        $config['upload_path'] = 'files/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|txt';
        $config['max_size']	= '';
        $config['max_width']  = '';
        $config['max_height']  = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ($this->upload->do_upload('file_location'))
        {
                 $fdata = $this->upload->data();
                $data['file_location']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        /*
         * --------End Image Upload---------
         */
//        }
       
        
        $this->sa_model->update_download_file_by_id($data,$file_id);
     //     $data['admin_main_content']=$this->load->view('admin/manage_download_file',$data,true);
         redirect('super_admin/manage_download_file');
      
    }
    public function delete_download_file($file_id)
    {
        $this->sa_model->delete_download_file_by_id($file_id);
        redirect('super_admin/manage_download_file');
    }
     public function delete_download_file_location($file_id)
    {
         $data=array();
        $data['img']=$this->sa_model->delete_download_file_location_by_id($file_id);
    
        $data['file_info']=$this->sa_model->select_download_file_info_by_id($file_id);
        $data['admin_main_content']=$this->load->view('admin/edit_download_file',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
       //---------------------------Stafff---------------------------------------
      public function add_staff()
    {
        $data=array();
     
        
        $data['admin_main_content']=$this->load->view('admin/add_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function save_staff()
    {    
        $data=array();
        $data['staff_name']=$this->input->post('staff_name',true);
        $data['department_id']=$this->input->post('department_id',true);
        $data['staff_designation']=$this->input->post('staff_designation',true);
        
        $data['staff_contact_no']=$this->input->post('staff_contact_no',true);
             
       
        
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/staff_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size']	= '1000';
        $config['max_width']  = '2024';
        $config['max_height']  = '1968';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('staff_image'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['staff_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
          
        $this->sa_model->save_staff_info($data);
        $sdata=array();
        $sdata['message']='Save Staff Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_staff');
    }
    
    
      public function manage_staff()
    {
        $data=array();
        $data['all_staff']=$this->sa_model->select_all_staff();
        $data['admin_main_content']=$this->load->view('admin/manage_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
    
      public function edit_staff($staff_id)
    {
        $data=array();
        
        $data['staff_info']=$this->sa_model->select_staff_info_by_id($staff_id);
        $data['admin_main_content']=$this->load->view('admin/edit_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function update_staff(){
        
       $data=array();
        $staff_id= $this->input->post('staff_id',true);
        $data['staff_name']=$this->input->post('staff_name',true);
        $data['staff_designation']=$this->input->post('staff_designation',true);
        $data['staff_contact_no']=$this->input->post('staff_contact_no',true);
        $data['department_id']=$this->input->post('department_id',true);
       
       
        

        /*
         * ------- Start Image Upload---------
         */
        
//        if($this->input->post('featured_image')){
        $config['upload_path'] = 'images/staff_images/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
        $config['max_size']	= '';
        $config['max_width']  = '';
        $config['max_height']  = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ($this->upload->do_upload('staff_image'))
        {
                 $fdata = $this->upload->data();
                $data['staff_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        /*
         * --------End Image Upload---------
         */
//        }
       
        
        $this->sa_model->update_staff_by_id($data,$staff_id);
        redirect('super_admin/manage_staff');
    }
    public function delete_staff($staff_id)
    {
        $this->sa_model->delete_staff_by_id($staff_id);
        redirect('super_admin/manage_staff');
    }
     public function delete_staff_image($staff_id)
    {
         $data=array();
        $data['img']=$this->sa_model->delete_staff_image_by_id($staff_id);
    
        $data['staff_info']=$this->sa_model->select_staff_info_by_id($staff_id);
        $data['admin_main_content']=$this->load->view('admin/edit_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
       
//    _____________________irs dean_office_staff_____________________________
     //------------------------------------dean_office_staff--------------------------
        public function add_dean_office_staff()
    {
        $data=array();
        
        
        $data['admin_main_content']=$this->load->view('admin/add_dean_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
        public function add_emba_office_staff()
    {
        $data=array();
        
        
        $data['admin_main_content']=$this->load->view('admin/add_emba_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
     public function save_dean_office_staff()
    {    
        $data=array();
        $data['dean_office_staff_name']=$this->input->post('dean_office_staff_name',true);
        $data['dean_office_staff_designation']=$this->input->post('dean_office_staff_designation',true);
        $data['dean_office_staff_contact_no']=$this->input->post('dean_office_staff_contact_no',true);
        $data['dean_office_staff_email']=$this->input->post('dean_office_staff_email',true);
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/dean_office_staffs/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
        $config['max_size']	= '1000';
        $config['max_width']  = '2024';
        $config['max_height']  = '1968';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('dean_office_staff_image'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['dean_office_staff_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
    
        $this->sa_model->save_dean_office_staff_info($data);
        $sdata=array();
        $sdata['message']=' Dean Office Staffs Information saved Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_dean_office_staff');
    }
    
    
    
    
    
    
    
     public function save_emba_office_staff()
    {    
        $data=array();
        $data['emba_office_staff_name']=$this->input->post('emba_office_staff_name',true);
        $data['emba_office_staff_designation']=$this->input->post('emba_office_staff_designation',true);
        $data['emba_office_staff_contact_no']=$this->input->post('emba_office_staff_contact_no',true);
        $data['emba_office_staff_email']=$this->input->post('emba_office_staff_email',true);
        /*
         * ------- Start Image Upload---------
         */
        $config['upload_path'] = 'images/emba_office_staffs/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
        $config['max_size']	= '1000';
        $config['max_width']  = '2024';
        $config['max_height']  = '1968';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('emba_office_staff_image'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['emba_office_staff_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        /*
         * --------End Image Upload---------
         */
    
        $this->sa_model->save_emba_office_staff_info($data);
        $sdata=array();
        $sdata['message']=' EMBA Office Staffs Information saved Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_emba_office_staff');
    }
    public function manage_dean_office_staff()
    {
        $data=array();
        $data['all_dean_office_staff']=$this->sa_model->select_all_dean_office_staff();
        $data['admin_main_content']=$this->load->view('admin/manage_dean_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
     public function manage_emba_office_staff()
    {
        $data=array();
        $data['all_dean_office_staff']=$this->sa_model->select_all_emba_office_staff();
        $data['admin_main_content']=$this->load->view('admin/manage_emba_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
    
      public function edit_dean_office_staff($dean_office_staff_id)
    {
        $data=array();
        
        $data['dean_office_staff_info']=$this->sa_model->select_dean_office_staff_info_by_id($dean_office_staff_id);
        $data['admin_main_content']=$this->load->view('admin/edit_dean_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
      public function edit_emba_office_staff($emba_office_staff_id)
    {
        $data=array();
        
        $data['emba_office_staff_info']=$this->sa_model->select_emba_office_staff_info_by_id($emba_office_staff_id);
        $data['admin_main_content']=$this->load->view('admin/edit_emba_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
    
     public function update_dean_office_staff(){
        
       $data=array();
        $dean_office_staff_id= $this->input->post('dean_office_staff_id',true);
        $data['dean_office_staff_name']=$this->input->post('dean_office_staff_name',true);
       
        $data['dean_office_staff_contact_no']=$this->input->post('dean_office_staff_contact_no',true);
         $data['dean_office_staff_designation']=$this->input->post('dean_office_staff_designation',true);
       
       
        

        /*
         * ------- Start Image Upload---------
         */
        
//        if($this->input->post('featured_image')){
        $config['upload_path'] = 'images/dean_office_staffs/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
        $config['max_size']	= '';
        $config['max_width']  = '';
        $config['max_height']  = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ($this->upload->do_upload('dean_office_staff_image'))
        {
                 $fdata = $this->upload->data();
                $data['dean_office_staff_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        /*
         * --------End Image Upload---------
         */
//        }
       
        
        $this->sa_model->update_dean_office_staff_by_id($data,$dean_office_staff_id);
        redirect('super_admin/manage_dean_office_staff');
    }
    
    
    
    public function update_emba_office_staff(){
        
       $data=array();
        $emba_office_staff_id= $this->input->post('emba_office_staff_id',true);
        $data['emba_office_staff_name']=$this->input->post('emba_office_staff_name',true);
       
        $data['emba_office_staff_contact_no']=$this->input->post('emba_office_staff_contact_no',true);
         $data['emba_office_staff_designation']=$this->input->post('emba_office_staff_designation',true);
       
       
        

        /*
         * ------- Start Image Upload---------
         */
        
//        if($this->input->post('featured_image')){
        $config['upload_path'] = 'images/emba_office_staffs/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
        $config['max_size']	= '';
        $config['max_width']  = '';
        $config['max_height']  = '';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ($this->upload->do_upload('emba_office_staff_image'))
        {
                 $fdata = $this->upload->data();
                $data['emba_office_staff_image']=$config['upload_path'] .$fdata['file_name'];
        }
        
        
        /*
         * --------End Image Upload---------
         */
//        }
       
        
        $this->sa_model->update_emba_office_staff_by_id($data,$emba_office_staff_id);
        redirect('super_admin/manage_emba_office_staff');
    }
    
    
    
    
    public function delete_emba_office_staff($emba_office_staff_id)
    {
        $this->sa_model->delete_emba_office_staff_by_id($emba_office_staff_id);
        redirect('super_admin/manage_emba_office_staff');
    }
     public function delete_emba_office_staff_image($emba_office_staff_id)
    {
         $data=array();
        $data['img']=$this->sa_model->delete_emba_office_staff_image_by_id($emba_office_staff_id);
    
        $data['emba_office_staff_info']=$this->sa_model->select_emba_office_staff_info_by_id($emba_office_staff_id);
        $data['admin_main_content']=$this->load->view('admin/edit_emba_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
      
    public function delete_dean_office_staff($dean_office_staff_id)
    {
        $this->sa_model->delete_dean_office_staff_by_id($dean_office_staff_id);
        redirect('super_admin/manage_dean_office_staff');
    }
     public function delete_dean_office_staff_image($dean_office_staff_id)
    {
         $data=array();
        $data['img']=$this->sa_model->delete_dean_office_staff_image_by_id($dean_office_staff_id);
    
        $data['dean_office_staff_info']=$this->sa_model->select_dean_office_staff_info_by_id($dean_office_staff_id);
        $data['admin_main_content']=$this->load->view('admin/edit_dean_office_staff',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
    
//    CSE PSTU About
    
     public function manage_about()
    {
        $data=array();
        $data['all_about']=$this->sa_model->select_all_about();
        $data['admin_main_content']=$this->load->view('admin/manage_about',$data,true);
        $this->load->view('admin/admin_master',$data);
    }         
    
      public function edit_about($about_id)
    {
        $data=array();
        
        $data['about_info']=$this->sa_model->select_about_info_by_id($about_id);
        $data['admin_main_content']=$this->load->view('admin/edit_about',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
     public function update_about(){
        
       $data=array();
        $about_id= $this->input->post('about_id',true);
        
        $data['welcome']=$this->input->post('welcome',true);
        $data['history']=$this->input->post('history',true);
        $data['vision']=$this->input->post('vision',true);
        $data['at_a_glance']=$this->input->post('at_a_glance',true);
        $data['contact_information']=$this->input->post('contact_information',true);
        
          $this->sa_model->update_about_by_id($data,$about_id);
        redirect('super_admin/manage_about');
    }
    public function delete_about($about_id)
    {
        $this->sa_model->delete_about_by_id($about_id);
        redirect('super_admin/manage_about');
    }
    public function see_sender_message(){
        $data=array();
        $data['title']='Messages';
        $data['all_message']=  $this->sa_model->select_all_messages_info();
        $data['admin_main_content']=  $this->load->view('admin/sender_message_view',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    
    
}