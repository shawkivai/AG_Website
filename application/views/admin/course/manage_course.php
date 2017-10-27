<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>course Id</th>
                <th>course Code</th>
                <th>Course Title</th>
                <th>Credit Hour</th>
                <th>Publication Status</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_course as $v_course)
                {
            ?>
            <tr>
                <td><?php echo $v_course->course_id?></td>
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
                <td class="center"><?php  
                    if($v_course->publication_status==1)
                    {
                        echo 'Published';
                    }
                    else{
                        echo 'Unpublished';
                    }
                ?></td>
                <td class="center">
                    <?php
                        if($v_course->publication_status==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_course/<?php echo $v_course->course_id?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_course/<?php echo $v_course->course_id?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?>
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_course/<?php echo $v_course->course_id?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_course/<?php echo $v_course->course_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>