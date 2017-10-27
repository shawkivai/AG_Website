<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage teacher</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span16">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Manage teacher</h2>
            
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
                <th>Teacher Id</th>
                <th>Teacher Name</th>
                <th> Department</th>
                <th>designation</th>
                <th>about </th>
                 <th>contact no.</th>
                <th>Research Area</th>
                 
                <th> Publication Status</th>
                <th> Chairman</th>
                <th>Teacher Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_teacher as $v_teacher)
                {
            ?>
            <tr>
                <td><?php echo $v_teacher->teacher_id?></td>
                <td class="center"><?php echo $v_teacher->teacher_name?></td>
                
                <td class="center"><?php echo $v_teacher->department_name?></td>
                <td class="center"><?php echo $v_teacher->teacher_designation?></td>
                <td class="center"><?php echo $v_teacher->teacher_about?></td>
                <td class="center"><?php echo $v_teacher->teacher_contact_no?></td>
                <td class="center"><?php echo $v_teacher->research_area?></td>
                
                <td class="center"><?php  
                    if($v_teacher->publication_status==1)
                    {
                        echo 'Published';
                    }
                    else{
                        echo 'Unpublished';
                    }
                ?></td>
                
                
                
                <td class="center"><?php  
                    if($v_teacher->chairman==1)
                    {
                        echo 'Chairman';
                    }
                    else{
                        echo 'Non Chairman';
                    }
                ?></td>
                <td class="center"><?php echo $v_teacher->teacher_email?></td>
                    <td class="center"><?php echo $v_teacher->teacher_password?></td>
                <td class="center">
                    <?php
                        if($v_teacher->publication_status==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_teacher/<?php echo $v_teacher->teacher_id?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_teacher/<?php echo $v_teacher->teacher_id?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?></td>
                    <td class="center"> <?php
                        if($v_teacher->chairman==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/chairman/<?php echo $v_teacher->teacher_id?>/<?php echo $v_teacher->department_id?>" title="chairman">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unfeatured_teacher/<?php echo $v_teacher->teacher_id?>" title="Unfeatured">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?></td>
                    
                    
                   <td class="center"> <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_teacher/<?php echo $v_teacher->teacher_id?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a></td>
                    <td class="center"><a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_teacher/<?php echo $v_teacher->teacher_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>
