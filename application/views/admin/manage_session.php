
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage session</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Manage session</h2>
            
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
                <th>session Id</th>
                <th>session Name</th>
                <th>Publication Status</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_session as $v_session)
                {
            ?>
            <tr>
                <td><?php echo $v_session->session_id?></td>
                <td class="center"><?php echo $v_session->session_name?></td>
                <td class="center"><?php  
                    if($v_session->publication_status==1)
                    {
                        echo 'Published';
                    }
                    else{
                        echo 'Unpublished';
                    }
                ?></td>
                <td class="center">
                    <?php
                        if($v_session->publication_status==0)
                        {
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_session/<?php echo $v_session->session_id?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  
                                                              
                    </a>
                        <?php }
                        
                        else{
                        ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_session/<?php echo $v_session->session_id?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                        <?php } ?>
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_session/<?php echo $v_session->session_id?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_session/<?php echo $v_session->session_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>