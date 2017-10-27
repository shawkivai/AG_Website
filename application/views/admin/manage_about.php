<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage CSE PSTU About</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span16">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Manage CSE PSTU About</h2>
            
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
                
               
                <th>Welcome</th>
                <th> History</th>
              
                 <th>Vision</th>
               
                <th>At a glance</th>
                <th>Contact Information</th>
                
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_about as $v_about)
                {
            ?>
            <tr>
             
                <td class="center"><?php echo $v_about->welcome?></td>
                <td class="center"><?php echo $v_about->history?></td>
                <td class="center"><?php echo $v_about->vision?></td>
                <td class="center"><?php echo $v_about->at_a_glance?></td>
                <td class="center"><?php echo $v_about->contact_information?></td>
                
               <td class="center"> <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_about/<?php echo $v_about->about_id?>" title="Edit">
                 <i class="icon-edit icon-white"></i>  
                                                                
                    </a></td>
                    <td class="center"><a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_about/<?php echo $v_about->about_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>
