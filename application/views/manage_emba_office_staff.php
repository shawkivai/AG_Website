<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage EMBA Office Staff</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span16">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Manage EMBA Office Staff</h2>
            
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
                
                <th>Staff ID</th>
                <th>Staff Name</th>
                
              
                 <th>Contact No.</th>
               
                <th>Designation</th>
				
				  <th>Email</th>
                
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_emba_office_staff as $v_emba_office_staff)
                {
            ?>
            <tr>
                <td><?php echo $v_emba_office_staff->emba_office_staff_id?></td>
                <td class="center"><?php echo $v_emba_office_staff->emba_office_staff_name?></td>
                
               
                <td class="center"><?php echo $v_emba_office_staff->emba_office_staff_contact_no?></td>
               
               <td class="center"><?php echo $v_emba_office_staff->emba_office_staff_designation?></td>
			   
			    <td class="center"><?php echo $v_emba_office_staff->emba_office_staff_email?></td>
                
                
                    
                   <td class="center"> <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_emba_office_staff/<?php echo $v_emba_office_staff->emba_office_staff_id?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a></td>
                    <td class="center"><a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_emba_office_staff/<?php echo $v_emba_office_staff->emba_office_staff_id?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>
