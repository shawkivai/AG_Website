
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage Student</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Manage Student</h2>
            
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
                
                <th>student Name</th>
                <th>student Roll</th>
                <th>student Reg No</th>
                
              
              
                 <th>contact no.</th>
                
                
                <th>Student Email</th>
                
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_student as $v_student)
                {
            ?>
            <tr>
                
                <td class="center"><?php echo $v_student->student_name?></td>
                
                <td class="center"><?php echo $v_student->student_roll_no?></td>
                <td class="center"><?php echo $v_student->student_reg_no?></td>
                <td class="center"><?php echo $v_student->student_contact_no?></td>
               
                <td class="center"><?php echo $v_student->student_email?></td>
                  
                <td class="center">
                    <?php
                        if($v_student->publication_status==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_student/<?php echo $v_student->student_id?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_student/<?php echo $v_student->student_id?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?></td>
                    
                    
                    
                   <td class="center"> <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_student/<?php echo $v_student->student_id?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a></td>
                    <td class="center"><a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_student/<?php echo $v_student->student_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>
