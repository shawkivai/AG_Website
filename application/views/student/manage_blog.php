<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage Blog</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span16">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Manage Blog</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>




<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                
               
                
                <th>Title</th>
                <th> Short Description</th>
              
                 <th>Long Description</th>
               
              
                
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            
           
            
            <?php
                foreach($all_blog as $v_blog)
                {
                     if(($v_blog->author_name) == $this->session->userdata('student_name'))
                     {
            ?>
            <tr>
             
                <td class="center"><?php echo $v_blog->blog_title?></td>
                <td class="center"><?php echo $v_blog->blog_short_description?></td>
                <td class="center"><?php echo $v_blog->blog_description?></td>
                
                
               <td class="center"> <a class="btn btn-info" href="<?php echo base_url();?>super_student/edit_blog/<?php echo $v_blog->blog_id?>" title="Edit">
                 <i class="icon-edit icon-white"></i>  
                                                                
                    </a></td>
                    <td class="center"><a class="btn btn-danger" href="<?php echo base_url();?>super_student/delete_blog/<?php echo $v_blog->blog_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
