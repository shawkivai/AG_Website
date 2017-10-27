<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>File Id</th>
                <th>File Name</th>
                <th>Uploaded By</th>
                <th>Download</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($teacher_files as $v_file)
                {
            ?>
            <tr>
                <td><?php echo $v_file->file_id?></td>
                <td class="center"><?php echo $v_file->file_name?></td>
                <td class="center"><?php echo $v_file->author_name?></td>
                <td class="center"><a href="<?php echo base_url(). $v_file->file_location?>">Download</a></td>
                <td class="center">
                   
                    
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_teacher_file/<?php echo $v_file->file_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>