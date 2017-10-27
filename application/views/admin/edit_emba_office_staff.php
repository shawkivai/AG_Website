<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit emba Office Staff</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit emba Office Staff</h2>

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
            <form name="edit_emba_office_staff" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_emba_office_staff" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Member Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_name" value="<?php echo $emba_office_staff_info->emba_office_staff_name; ?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="emba_office_staff_id" value="<?php echo $emba_office_staff_info->emba_office_staff_id; ?>">

                        </div>
                    </div>
             
                    

                   
              
                        <div class="control-group">
                        <label class="control-label" for="textarea2">Designation</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_designation" value="<?php echo $emba_office_staff_info->emba_office_staff_designation; ?>">
                               
                            </textarea>
                        </div>
                    </div>
                   
              
                   
              
                        <div class="control-group">
                        <label class="control-label" for="textarea2">Contact No</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_contact_no" value="<?php echo $emba_office_staff_info->emba_office_staff_contact_no; ?>">
                               
                            </textarea>
                        </div>
                    </div>
                    
					
					  <div class="control-group">
                        <label class="control-label" for="textarea2">Email</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_email" value="<?php echo $emba_office_staff_info->emba_office_staff_email; ?>">
                               
                            </textarea>
                        </div>
                    </div>
					
					
					
                     <?php 
                    if($emba_office_staff_info->emba_office_staff_image)
                    {
                     ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"> Image </label>
                        <div class="controls">
                            <img src='<?php echo base_url().$emba_office_staff_info->emba_office_staff_image;?>' /> 
                            
                            <a href="<?php echo base_url();?>super_admin/delete_emba_office_staff_image/<?php echo $emba_office_staff_info->emba_office_staff_id?>">delete image</a>

                        </div>  
                    <?php 
                    }
                    else
                    {
                    ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Image </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="emba_office_staff_image" value="emba_office_staff_image">

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
