<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit Staff</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Staff</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>
        <div class="box-content">
            <form name="edit_staff" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_staff" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Staff Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="staff_name" value="<?php echo $staff_info->staff_name; ?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="staff_id" value="<?php echo $staff_info->staff_id; ?>">

                        </div>
                    </div>
             
                    

                   
              
                        <div class="control-group">
                        <label class="control-label" for="textarea2">Department</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="department_id" value="<?php echo $staff_info->department_id; ?>">
                               
                            </textarea>
                        </div>
                    </div>
                   
                        <div class="control-group">
                        <label class="control-label" for="textarea2">Designation</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="staff_designation" value="<?php echo $staff_info->staff_designation; ?>">
                               
                            </textarea>
                        </div>
                    </div>
                   
              
                    
              
                        <div class="control-group">
                        <label class="control-label" for="textarea2">Contact No</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="staff_contact_no" value="<?php echo $staff_info->staff_contact_no; ?>">
                               
                            </textarea>
                        </div>
                    </div>
                    
                     <?php 
                    if($staff_info->staff_image)
                    {
                     ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"> Image </label>
                        <div class="controls">
                            <img src='<?php echo base_url().$staff_info->staff_image;?>'/> 
                            
                            <a href="<?php echo base_url();?>super_admin/delete_staff_image/<?php echo $staff_info->staff_id?>">delete image</a>

                        </div>  
                    <?php 
                    }
                    else
                    {
                    ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Image </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="staff_image" value="staff_image">

                        </div>
                    <?php } ?>
                    </div>
                   
              
                     
                   
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">




</script>
